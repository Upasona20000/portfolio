const API_KEY = "api_key=f99f71cc7a9b0da302069b64f4baf56c";
const BASE_URL = "https://api.themoviedb.org/3";
const API_URL = BASE_URL + "/discover/movie?sort_by=popularity.desc&" + API_KEY;

const IMG_URL = "https://image.tmdb.org/t/p/w500/";
const searchURL = BASE_URL + "/search/movie?" + API_KEY;

const main = document.getElementById("main");
const form = document.getElementById("form");
const search = document.getElementById("search");
const find = document.getElementById("find");
const tags = document.getElementById("tags");

const Genre = [
  {
    id: 28,
    name: "Action",
  },
  {
    id: 12,
    name: "Adventure",
  },
  {
    id: 16,
    name: "Animation",
  },
  {
    id: 35,
    name: "Comedy",
  },
  {
    id: 80,
    name: "Crime",
  },
  {
    id: 99,
    name: "Documentary",
  },
  {
    id: 18,
    name: "Drama",
  },
  {
    id: 10751,
    name: "Family",
  },
  {
    id: 14,
    name: "Fantasy",
  },
  {
    id: 36,
    name: "History",
  },
  {
    id: 27,
    name: "Horror",
  },
  {
    id: 10402,
    name: "Music",
  },
  {
    id: 9648,
    name: "Mystery",
  },
  {
    id: 10749,
    name: "Romance",
  },
  {
    id: 878,
    name: "Science Fiction",
  },
  {
    id: 10770,
    name: "TV Movie",
  },
  {
    id: 53,
    name: "Thriller",
  },
  {
    id: 10752,
    name: "War",
  },
  {
    id: 37,
    name: "Western",
  },
];

var selectedGenre = [];

getMovies(API_URL);

function getMovies(url) {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      if(data.results.length!=0){
      showMovies(data.results);
      }
      else{
        main.innerHTML=`<div class="no-results">No results found, Please Select less than 5 elements</div>`;
      }
    });
}

setGenre();
function setGenre() {
  Genre.forEach((genre) => {
    console.log("upasona");
    console.log("this is", genre);
    const t = document.createElement("li");
    t.classList.add("tag");
    t.id = genre.id;
    t.innerText = genre.name;
    t.addEventListener("click", () => {
      if (selectedGenre.length == 0) {
        selectedGenre.push(genre.id);
      } else {
        if (selectedGenre.includes(genre.id)) {
          selectedGenre.forEach((id, index) => {
            if (id == genre.id) {
              const highlightedTag=document.getElementById(id);
              highlightedTag.classList.remove('highlight');
              selectedGenre.splice(index, 1);
            }
          });
        } else {
          selectedGenre.push(genre.id);
        }
      }
      highLightSelection();
      console.log(selectedGenre);
      getMovies(API_URL + "&with_genres=" + encodeURI(selectedGenre.join(",")));
    });
    tags.append(t);
  });
}

function showMovies(data) {
  main.innerHTML = "";

  data.forEach((element) => {
    const [title, poster_path, vote_average, overview] = [
      element.title,
      element.poster_path,
      element.vote_average,
      element.overview,
    ];
    const movie = document.createElement("div");
    movie.classList.add("movie");
    movie.innerHTML = `
        <img
          src="${poster_path?IMG_URL + poster_path:"http://via.placeholder.com/1000x1500"}"
          alt="image"
        />
        <div class="movie-info">
          <h3>${title}</h3>
          <span class="${getColor(vote_average)}">${vote_average}</span>
        </div>
        <div class="overview">
            ${overview}
        </div>
        `;
    main.appendChild(movie);
  });
}

function getColor(vote) {
  if (vote >= 8) return "green";
  else if (vote >= 5) return "orange";
  else return "red";
}

find.addEventListener("click", (event) => {
  event.preventDefault();
  const searchTerm = search.value;
  if (searchTerm) {
    getMovies(searchURL + "&query=" + searchTerm);
  }
});

function highLightSelection() {
  if (selectedGenre.length != 0) {
    selectedGenre.forEach((id) => {
      const highlightedTag=document.getElementById(id);
      highlightedTag.classList.add('highlight');
    });
  }
}
