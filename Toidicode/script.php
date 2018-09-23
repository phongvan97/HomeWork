<script src="https://toidicode.com/public/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
<script>
    hljs.initHighlightingOnLoad();
</script>
<script type="text/javascript" src="https://toidicode.com/wp-content/themes/thanhtai/js/custom.js?ver=0.1"></script>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '610336262482409',
            xfbml: true,
            version: 'v2.7'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1006627516070863'); // Insert your pixel ID here.
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1006627516070863&ev=PageView&noscript=1"/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
<!-- analytics-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-84078941-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- end analytics-->
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
        appId: "6f7bb3d7-7a68-49e2-8482-64665bc9c1b3",
        autoRegister: true,
        notifyButton: {
            enable: false /* Set to false to hide */
        },
        welcomeNotification: {
            "title": "Toidicode.com",
            "message": "Cảm ơn bạn đã đăng ký nhận thông báo từ chúng tôi!",
            "url": "https://toidicode.com"
        }
    }]);
</script>