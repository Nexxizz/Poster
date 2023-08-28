function start() {
    "use strict";
    document.getElementById("posters").options[0].selected = true;
    show(0);
}

function nextPoster(){
    "use strict";
    let i;
    let myselect = document.getElementById("posters");
    let myoptions = myselect.options;
    i = myselect.selectedIndex;
    i = i + 1;
    if (i >= myoptions.length) {
        i = 0;
    }
    myoptions[i].selected = true;
    show(i);
}

function show(nr) {
    "use strict";
    let sel = document.getElementById("posters");
    let picture = sel.options[nr].text;
    document.getElementById("poster").src = picture;
}
