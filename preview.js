document.getElementById("frame").contentDocument.head.innerHTML = "<link rel=\"stylesheet\" href=\"code.css\">"

function update() {
    var converter = new showdown.Converter()
    var text = document.getElementById("gg").value
    var html = converter.makeHtml(text)
    document.getElementById("frame").contentDocument.body.innerHTML = html
}

function hdr() {
    if (document.getElementById("inhdr").value == "") {
        document.getElementById("hdr").innerHTML = "Title"
    } else {
        document.getElementById("hdr").innerHTML = document.getElementById("inhdr").value
    }
}
