//This code was graciously given to me by the original coder - Stephen A. Wilson

freaturedDelay = 1000;
running = false;
ticks = 0;

$( document ).ready(function() {
  addItemToFeatured("projects.html",
                    "Traffic Light",
                    "Assignment",
                    "images/trafficlight.jpg");
  addItemToFeatured("projects.html",
                    "BookSafe",
                    "Project",
                    "images/book5.jpg");
  //addItemToFeatured("projects.html",	//image link
                   // "Tic Tac Toe",	//Name
                   // "Assignment",	//Optional Text
                  //  "images/tictactoe.jpg"); 	//bg image
  nextFeaturedItem();

  $("#featured .leftButton").click(prevFeaturedItem);
  $("#featured .rightButton").click(nextFeaturedItem);

  // window.setInterval(featuredTick, freaturedDelay);
});

function addItemToFeatured(itemLink, itemTitle, itemType, imgSrc) {
  $("#featured").append("<div class='item'>"+
    "<a href='#' class='leftButton'>"+
      "<div class='arrow'>"+
      "</div>"+
      "</a>"+
      "<a href='#' class='rightButton'>"+
        "<div class='arrow'></div>"+
      "</a>"+
      "<a href='" + itemLink + "' class='itemContent'>"+
        "<div class='itemTitle'>" + itemTitle + "</div>"+
        "<div class='itemType'>" + itemType + "</div>"+
      "<a class='seeMoreButton' href='projects.html'>See more &rarr;</a>"+
    "</a>"+
    "<img class='itemImage' src='" + imgSrc + "' alt='' />"+
  "</div>");
}

function featuredTick() {
  ticks += 1;
  if (ticks >= 10) {
    nextFeaturedItem();
  }
}

function nextFeaturedItem(event) {
  if (event) {
    event.preventDefault();
  }
  if (!running) {
    running = true;
    ticks = 0;
    $("#featured .item").first().fadeOut(500, function() {
      $(this).appendTo("#featured");
      $("#featured .item").first().fadeIn(500, function() {
        running = false;
      });
    });
  }
}

function prevFeaturedItem(event) {
  if (event) {
    event.preventDefault();
  }
  if (!running) {
    running = true;
    ticks = 0;
    $("#featured .item").first().fadeOut(500, function() {
      $("#featured .item").last().prependTo("#featured").fadeIn(500);
      running = false;
    });
  }
}
