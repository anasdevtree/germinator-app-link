<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145733623-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-145733623-1');
</script>

<script>
function getMobileOperatingSystem() {
  var userAgent = navigator.userAgent || navigator.vendor || window.opera;
      // Windows Phone must come first because its UA also contains "Android"
    // if (/windows phone/i.test(userAgent)) {
    //     return "Windows Phone";
    // }
    if (/android/i.test(userAgent)) {
        return "Android";
    }
    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        return "iOS";
    }
    return "unknown";
}</script>
<script>
function DetectAndServe(){
    let os = getMobileOperatingSystem();
    if (os == "Android") {
        window.location.href = "https://play.google.com/store/apps/details?id=com.finehh.finegerminator&hl=en"; 
    } else if (os == "iOS") {
        window.location.href = "https://apps.apple.com/us/app/fine-germinator/id1458579401";
    } else {
        window.location.href = "https://www.finetissues.com/finegerminator";
    }
}
</script>