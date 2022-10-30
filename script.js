let fi = document.getElementById("payfile");

fi.addEventListener("change", (event)=> {
    let filename = event.target.files[0].name;
    let fup = document.getElementById("el12");
    fup.setAttribute('data', `Uploaded : ${filename}`);
})

