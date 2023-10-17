var converter = new showdown.Converter()
var text = document.getElementById('content').innerHTML
var html = converter.makeHtml(text)
document.getElementById('content').innerHTML = html
