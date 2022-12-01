
window.onload = function() {
    document.querySelector("#submit").onclick = function (event) {
        event.stopPropagation();
        event.preventDefault();

        let url =   document.getElementById("url").value;
        let data = get('/api/parser?url='+url);
        let str = '';

        if (data.status == false) {
            str += data.message;
        } else {
            for (var key in data.tags) {
                str += '<div class="tags_list"><div>' + key + '</div><div>' + data.tags[key] + '</div></div>';
            }
        }
        document.getElementById("content").innerHTML = str;
    }
};

function get(url){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, false);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send();
    if (xhr.status != 200) {
        return false;
    } else {
        return JSON.parse(xhr.responseText);
    }
}