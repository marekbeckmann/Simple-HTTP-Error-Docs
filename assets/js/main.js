function getRef() {
    const url_string = window.location.href;
    const url = new URL(url_string);
    const ref = url.searchParams.get("ref");
    if (ref = "") { ref = 404 }
    setError(parseInt(ref, 10));
}

function setError(refCode) {
    var errorLong;
    var errorDesc;
    switch (refCode) {
        case 404: case 403: case 405:
            errorLong = "page not found";
            errorDesc = "We did everything we could, but unfortunately, the page you requested doesn't exist, was moved, or you have no permission to view it.";
            break;
        case 500: case 502: case 503: case 504: case 505:
            errorLong = "internal server error";
            errorDesc = "We are experiencing some server related problems at the moment. Please be patient, while we fix this issue as quickly as possible.";
            break;
        default:
            errorLong = "error occured";
            errorDesc = "Seems like something went wrong! Please try again in a moment";
    }
    document.getElementById("errorcode").innerHTML = refCode;
    document.getElementById("errorcode").setAttribute("data-text", refCode);
    document.getElementById("error-long").innerHTML = errorLong;
    document.getElementById("error-description").innerHTML = errorDesc;


}

getRef();