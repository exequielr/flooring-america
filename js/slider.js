let index = 1
let images = []
let center = 2

function setIndex() {
  images = document.querySelectorAll(".vertical-carousel__content")
  images.forEach((el, i) => {
    if (i === index) {
      el.style.cssText += "z-index: 6;"
    } else {
      el.style.cssText += "z-index: 5;"
    }
  })
}

function next() {
  index == images.length ? (index = 1) : index++
  setIndex()
}

function prev() {
  index == 1 ? (index = images.length) : index--
  setIndex()
}

function left() {
  center = center === 1 ? (center = 4) : (center = center - 1)
  let active = document.getElementById(center)
  active.scrollIntoView({
    block: "nearest",
    inline: "center",
    behavior: "smooth",
  })
}

function right() {
  center = center === 4 ? (center = 1) : (center = center + 1)
  let active = document.getElementById(center)
  active.scrollIntoView({
    block: "nearest",
    inline: "center",
    behavior: "smooth",
  })
}
