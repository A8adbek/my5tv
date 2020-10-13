<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" id="facebook" class="">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
    <script nonce="">window._cstart = +new Date();</script>
    <script nonce="">function envFlush(a) {
            function b(b) {
                for (var c in a) b[c] = a[c]
            }

            window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
        }

        envFlush({
            "ajaxpipe_token": "AXgJ8QeflUjcXHBZ",
            "timeslice_heartbeat_config": {
                "pollIntervalMs": 33,
                "idleGapThresholdMs": 60,
                "ignoredTimesliceNames": {
                    "requestAnimationFrame": true,
                    "Event listenHandler mousemove": true,
                    "Event listenHandler mouseover": true,
                    "Event listenHandler mouseout": true,
                    "Event listenHandler scroll": true
                },
                "isHeartbeatEnabled": true,
                "isArtilleryOn": false
            },
            "shouldLogCounters": true,
            "timeslice_categories": {"react_render": true, "reflow": true},
            "sample_continuation_stacktraces": true,
            "dom_mutation_flag": true,
            "khsh": "0`sj`e`rm`s-0fdu^gshdoer-0gc^eurf-3gc^eurf;1;enbtldou;fduDmdldourCxO`ld-2YLMIuuqSdptdru;qsnunuxqd;rdoe-0unjdojnx-0unjdojnx0-0gdubi^rdbsduOdv-0`sj`e`r-0q`xm`r-0StoRbs`qhof-0mhoj^q`xm`r",
            "stack_trace_limit": 30,
            "timesliceBufferSize": 5000,
            "show_invariant_decoder": false,
            "compat_iframe_token": "AQ5jEOroMSG98Tgm",
            "isCQuick": false
        });</script>
    <style nonce=""></style>
    <script nonce="">__DEV__ = 0;
        CavalryLogger = window.CavalryLogger || function (a) {
            this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this.instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {}, this.values = {t_cstart: window._cstart}, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this.initializeInstrumentation && this.initializeInstrumentation()
        }, CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
            this.is_detailed_profiler = a;
            return this
        }, CavalryLogger.prototype.setTTIEvent = function (a) {
            this.tti_event = a;
            return this
        }, CavalryLogger.prototype.setValue = function (a, b, c, d) {
            d = d ? this.piggy_values : this.values;
            (typeof d[a] === "undefined" || c) && (d[a] = b);
            return this
        }, CavalryLogger.prototype.getLastTtiValue = function () {
            return this.lastTtiValue
        }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function (a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
            return this
        }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function (a) {
            console.timeStamp(a)
        } : function () {
        }, CavalryLogger.prototype.addPiggyback = function (a, b) {
            this.piggy_values[a] = b;
            return this
        }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.disableArtilleryOnUntilOffLogging = !1, CavalryLogger.getInstance = function (a) {
            typeof a === "undefined" && (a = CavalryLogger.id);
            CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
            return CavalryLogger.instances[a]
        }, CavalryLogger.setPageID = function (a) {
            if (CavalryLogger.id === 0) {
                var b = CavalryLogger.getInstance();
                CavalryLogger.instances[a] = b;
                CavalryLogger.instances[a].lid = a;
                delete CavalryLogger.instances[0]
            }
            CavalryLogger.id = a
        }, CavalryLogger.now = function () {
            return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
        }, CavalryLogger.prototype.measureResources = function () {
        }, CavalryLogger.prototype.profileEarlyResources = function () {
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
        }, CavalryLogger.start_js = function () {
        }, CavalryLogger.done_js = function () {
        };
        CavalryLogger.getInstance().setTTIEvent("t_domcontent");
        CavalryLogger.prototype.measureResources = function (a, b) {
            if (!this.log_resources) return;
            var c = "bootload/" + a.name;
            if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return;
            var d = CavalryLogger.now();
            this.ongoing_watch[c] = d;
            "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
            b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
            if (a.type === "js") {
                c = "js_exec/" + a.name;
                this.ongoing_watch[c] = d
            }
        }, CavalryLogger.prototype.stopWatch = function (a) {
            if (this.ongoing_watch[a]) {
                var b = CavalryLogger.now(), c = b - this.ongoing_watch[a];
                this.bootloader_metrics[a] = c;
                var d = this.piggy_values;
                a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d.resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d.resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                delete this.ongoing_watch[a]
            }
            return this
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
            var a = {};
            Object.values(window.CavalryLogger.instances).forEach(function (b) {
                b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
            });
            return a
        }, CavalryLogger.start_js = function (a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
        }, CavalryLogger.done_js = function (a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
        }, CavalryLogger.prototype.profileEarlyResources = function (a) {
            for (var b = 0; b < a.length; b++) this.measureResources({name: a[b][0], type: a[b][1] ? "js" : ""}, "_EF_")
        };
        CavalryLogger.getInstance().log_resources = true;
        CavalryLogger.getInstance().setIsDetailedProfiler(true);
        window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");</script>
    <noscript>
        <meta http-equiv="refresh" content="0; URL=/?_fb_noscript=1"/>
    </noscript>
    <link rel="manifest" href="https://www.facebook.com/data/manifest/" crossorigin="use-credentials">
    <title id="pageTitle">Facebook - Log In or Sign Up</title>
    <meta property="og:site_name" content="Facebook">
    <meta property="og:url" content="https://www.facebook.com/">
    <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png">
    <meta property="og:locale" content="en_US">
    <script type="application/ld+json" nonce="">{
            "\u0040context": "http:\/\/schema.org",
            "\u0040type": "WebSite",
            "name": "Facebook",
            "url": "https:\/\/www.facebook.com\/"
        }</script>
    <link rel="search" type="application/opensearchdescription+xml" href="https://www.facebook.com/osd.xml"
          title="Facebook">
    <link rel="canonical" href="https://www.facebook.com/">
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.facebook.com/">
    <link rel="alternate" media="handheld" href="https://m.facebook.com/">
    <link rel="alternate" hreflang="x-default" href="https://www.facebook.com/">
    <link rel="alternate" hreflang="en" href="https://www.facebook.com/">
    <link rel="alternate" hreflang="ar" href="https://ar-ar.facebook.com/">
    <link rel="alternate" hreflang="bg" href="https://bg-bg.facebook.com/">
    <link rel="alternate" hreflang="bs" href="https://bs-ba.facebook.com/">
    <link rel="alternate" hreflang="ca" href="https://ca-es.facebook.com/">
    <link rel="alternate" hreflang="da" href="https://da-dk.facebook.com/">
    <link rel="alternate" hreflang="el" href="https://el-gr.facebook.com/">
    <link rel="alternate" hreflang="es" href="https://es-la.facebook.com/">
    <link rel="alternate" hreflang="es-es" href="https://es-es.facebook.com/">
    <link rel="alternate" hreflang="fa" href="https://fa-ir.facebook.com/">
    <link rel="alternate" hreflang="fi" href="https://fi-fi.facebook.com/">
    <link rel="alternate" hreflang="fr" href="https://fr-fr.facebook.com/">
    <link rel="alternate" hreflang="fr-ca" href="https://fr-ca.facebook.com/">
    <link rel="alternate" hreflang="hi" href="https://hi-in.facebook.com/">
    <link rel="alternate" hreflang="hr" href="https://hr-hr.facebook.com/">
    <link rel="alternate" hreflang="id" href="https://id-id.facebook.com/">
    <link rel="alternate" hreflang="it" href="https://it-it.facebook.com/">
    <link rel="alternate" hreflang="ko" href="https://ko-kr.facebook.com/">
    <link rel="alternate" hreflang="mk" href="https://mk-mk.facebook.com/">
    <link rel="alternate" hreflang="ms" href="https://ms-my.facebook.com/">
    <link rel="alternate" hreflang="pl" href="https://pl-pl.facebook.com/">
    <link rel="alternate" hreflang="pt" href="https://pt-br.facebook.com/">
    <link rel="alternate" hreflang="pt-pt" href="https://pt-pt.facebook.com/">
    <link rel="alternate" hreflang="ro" href="https://ro-ro.facebook.com/">
    <link rel="alternate" hreflang="sl" href="https://sl-si.facebook.com/">
    <link rel="alternate" hreflang="sr" href="https://sr-rs.facebook.com/">
    <link rel="alternate" hreflang="th" href="https://th-th.facebook.com/">
    <link rel="alternate" hreflang="vi" href="https://vi-vn.facebook.com/">
    <meta name="description"
          content="Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">
    <meta name="robots" content="noodp,noydir">
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yo/r/iRmz9lCMBD2.ico">
    <link type="text/css" rel="stylesheet" href="./facebook_files/6Fpi59aeuTi.css" data-bootloader-hash="4BeuA"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./facebook_files/uHFYEu3YedI.css" data-bootloader-hash="nO6Ms"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./facebook_files/yXaPSl6hcJG.css" data-bootloader-hash="jFzWg"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./facebook_files/mIpWsx9K0WA.css" data-bootloader-hash="WSLNY"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./facebook_files/J7v5Yq6Muf2.css" data-bootloader-hash="NsgUh"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./facebook_files/3CdGXDb4FRe.css" data-bootloader-hash="bUJco"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./facebook_files/lZ86cv9aR90.css" data-bootloader-hash="f+J2L"
          crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./facebook_files/XQAa2iTc7pE.css" data-bootloader-hash="i7r0r"
          crossorigin="anonymous">
    <script src="./facebook_files/e3scFi4WlvB.js" data-bootloader-hash="uzsOI" crossorigin="anonymous"
            nonce=""></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script nonce="">requireLazy(["gkx"], function (gkx) {
            gkx.add({
                "676837": {"result": false, "hash": "AT55-o-TL6yaYfUX"},
                "708253": {"result": false, "hash": "AT7xQIjsAmBW7b9M"},
                "946894": {"result": false, "hash": "AT6XZYZsPdPIvqqA"},
                "996940": {"result": false, "hash": "AT7UJJ0qBwYimt5o"},
                "1263340": {"result": false, "hash": "AT4TKlhDj_XmOh5G"},
                "676920": {"result": true, "hash": "AT6_FP7yKSjYSBNG"},
                "676921": {"result": false, "hash": "AT7BQNtY4TrrDPMB"},
                "1073500": {"result": true, "hash": "AT5WGSLVPXQTi_I8"},
                "1167394": {"result": false, "hash": "AT5E-roHm9Bgur7s"},
                "676838": {"result": false, "hash": "AT4FRMpE886NS7kP"},
                "1522266": {"result": true, "hash": "AT5-ObznwT0tGlde"},
                "1554827": {"result": false, "hash": "AT7WUIgb6tJVWZ9X"}
            });
        });
        requireLazy(["qex"], function (qex) {
            qex.add({"1495391": {"r": null}, "1495392": {"r": null}, "1505135": {"r": null}});
        });
        requireLazy(["TimeSliceImpl", "ServerJS"], function (TimeSlice, ServerJS) {
            (new ServerJS()).handle({
                "define": [["URLFragmentPreludeConfig", [], {
                    "hashtagRedirect": true,
                    "fragBlacklist": ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"]
                }, 137], ["BootloaderConfig", [], {
                    "deferBootloads": false,
                    "jsRetries": [200, 500],
                    "jsRetryAbortNum": 2,
                    "jsRetryAbortTime": 5,
                    "payloadEndpointURI": "https:\/\/www.facebook.com\/ajax\/bootloader-endpoint\/",
                    "preloadBE": true,
                    "shouldCoalesceModuleRequestsMadeInSameTick": true,
                    "retryQueuedBootloads": false,
                    "silentDups": false
                }, 329], ["CSSLoaderConfig", [], {
                    "timeout": 5000,
                    "modulePrefix": "BLCSS:",
                    "loadEventSupported": true
                }, 619], ["CookieCoreConfig", [], {
                    "a11y": {"s": "None"},
                    "act": {"s": "Lax"},
                    "c_user": {"s": "None"},
                    "cppo": {"t": 86400, "s": "None"},
                    "dpr": {"t": 604800, "s": "None"},
                    "js_ver": {"t": 604800, "s": "None"},
                    "locale": {"t": 604800, "s": "None"},
                    "m_pixel_ratio": {"t": 604800, "s": "None"},
                    "noscript": {"s": "None"},
                    "pnl_data2": {"t": 2, "s": "None"},
                    "presence": {"s": "None"},
                    "sfau": {"s": "None"},
                    "wd": {"t": 604800, "s": "None"},
                    "x-referer": {"s": "None"},
                    "x-src": {"t": 1, "s": "None"}
                }, 2104], ["CurrentCommunityInitialData", [], {}, 490], ["CurrentEnvironment", [], {
                    "facebookdotcom": true,
                    "messengerdotcom": false,
                    "workplacedotcom": false
                }, 827], ["CurrentUserInitialData", [], {
                    "USER_ID": "0",
                    "ACCOUNT_ID": "0",
                    "NAME": "",
                    "SHORT_NAME": null,
                    "IS_MESSENGER_ONLY_USER": false,
                    "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                    "IS_MESSENGER_CALL_GUEST_USER": false,
                    "APP_ID": "256281040558"
                }, 270], ["DTSGInitialData", [], {}, 258], ["ISB", [], {}, 330], ["LSD", [], {"token": "AVqiWVPu"}, 323], ["ServerNonce", [], {"ServerNonce": "lC_gkkyFhJMjHcET_xizlu"}, 141], ["SiteData", [], {
                    "server_revision": 1002350392,
                    "client_revision": 1002350392,
                    "tier": "",
                    "push_phase": "C3",
                    "pkg_cohort": "PHASED:DEFAULT",
                    "pr": 1,
                    "haste_site": "www",
                    "be_one_ahead": false,
                    "ir_on": true,
                    "is_rtl": false,
                    "is_comet": false,
                    "hsi": "6847670758198911167-0",
                    "semr_host_bucket": "5",
                    "spin": 4,
                    "__spin_r": 1002350392,
                    "__spin_b": "trunk",
                    "__spin_t": 1594347590,
                    "vip": "157.240.0.35"
                }, 317], ["SprinkleConfig", [], {
                    "param_name": "jazoest",
                    "version": 2,
                    "should_randomize": false
                }, 2111], ["UserAgentData", [], {
                    "browserArchitecture": "32",
                    "browserFullVersion": "83.0.4103.116",
                    "browserMinorVersion": 0,
                    "browserName": "Chrome",
                    "browserVersion": 83,
                    "deviceName": "Unknown",
                    "engineName": "WebKit",
                    "engineVersion": "537.36",
                    "platformArchitecture": "32",
                    "platformName": "Mac OS X",
                    "platformVersion": "10.15",
                    "platformFullVersion": "10.15.5"
                }, 527], ["PromiseUsePolyfillSetImmediateGK", [], {"www_always_use_polyfill_setimmediate": false}, 2190], ["KSConfig", [], {
                    "killed": {"__set": ["POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "STO_AD_DELIVERY_PAUSE", "POCKET_MONSTERS_UPDATE_NAME", "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION", "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING", "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING", "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER", "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API", "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API", "CALENDAR_WEEKVIEW_NEW_BADGE", "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES", "LAB_NET_NEW_UI_RELEASE", "EO_SRT_HELPDESK_DASHBOARD_DISABLE_UNUSED_TAB_IN_RIGHT_PANEL", "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE", "HELPDESK_USE_XDS_SEARCHABLE_INPUT_FOR_WORKFLOW"]},
                    "ko": {"__set": ["acrJTh9WGdp", "1oOE64fL4wO", "2dhqRnqXGLQ", "3GaiM9xYkM2", "7r6mSP7ofr2", "1ntjZ2zgf03", "3oh5Mw86USj", "8NAceEy9JZo", "5mNEXob0nTj", "4j36SVzvP3w", "8PlKuowafe8", "53gCxKq281G", "3yzzwBY7Npj", "4NSq3ZC4ScE", "1onzIv0jH6H", "7EZACZMulOj", "5XCz1h9Iaw3", "DDZhogI19W", "6fHw06UmAMW", "7FOIzos6XJX", "aDayprn6pbH"]}
                }, 2580], ["CookieCoreLoggingConfig", [], {
                    "maximumIgnorableStallMs": 16.67,
                    "sampleRate": 9.7e-5,
                    "sampleRateClassic": 1.0e-10,
                    "sampleRateFastStale": 1.0e-8
                }, 3401], ["ImmediateImplementationExperiments", [], {"prefer_message_channel": true}, 3419], ["DTSGInitData", [], {
                    "token": "",
                    "async_get_token": ""
                }, 3515], ["UriNeedRawQuerySVConfig", [], {"uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com", "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th", "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com", "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com", "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx", "bestbuy.com.mx", "booking.com"]}, 3871], ["InitialCookieConsent", [], {
                    "deferCookies": false,
                    "noCookies": false,
                    "shouldShowCookieBanner": false
                }, 4328], ["TrustedTypesConfig", [], {
                    "useTrustedTypes": false,
                    "reportOnly": true
                }, 4548], ["WebConnectionClassServerGuess", [], {"connectionClass": "EXCELLENT"}, 4705], ["CometAltpayJsSdkIframeAllowedDomains", [], {"allowed_domains": ["https:\/\/live.adyen.com", "https:\/\/integration-facebook.payu.in", "https:\/\/facebook.payulatam.com", "https:\/\/secure.payu.com", "https:\/\/facebook.dlocal.com", "https:\/\/buy2.boku.com", "https:\/\/altpay-pe-test.herokuapp.com"]}, 4920], ["BootloaderEndpointConfig", [], {
                    "endpointURI": "https:\/\/www.facebook.com\/ajax\/bootloader-endpoint\/",
                    "debugNoBatching": false
                }, 5094], ["BigPipeExperiments", [], {
                    "link_images_to_pagelets": false,
                    "enable_bigpipe_plugins": false
                }, 907], ["AsyncRequestConfig", [], {
                    "retryOnNetworkError": "1",
                    "useFetchStreamAjaxPipeTransport": false
                }, 328], ["FbtResultGK", [], {
                    "shouldReturnFbtResult": true,
                    "inlineMode": "NO_INLINE"
                }, 876], ["IntlPhonologicalRules", [], {
                    "meta": {"\/_B\/": "([.,!?\\s]|^)", "\/_E\/": "([.,!?\\s]|$)"},
                    "patterns": {
                        "\/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)\/": "\u0001$1$2s\u0001$3",
                        "\/_\u0001([^\u0001]*)\u0001\/": "javascript"
                    }
                }, 1496], ["IntlViewerContext", [], {"GENDER": 3}, 772], ["NumberFormatConfig", [], {
                    "decimalSeparator": ".",
                    "numberDelimiter": ",",
                    "minDigitsForThousandsSeparator": 4,
                    "standardDecimalPatternInfo": {"primaryGroupSize": 3, "secondaryGroupSize": 3},
                    "numberingSystemData": null
                }, 54], ["SessionNameConfig", [], {"seed": "2UZv"}, 757], ["ZeroCategoryHeader", [], {}, 1127], ["ZeroRewriteRules", [], {
                    "rewrite_rules": {}, "whitelist": {
                        "\/hr\/r": 1,
                        "\/hr\/p": 1,
                        "\/zero\/unsupported_browser\/": 1,
                        "\/zero\/policy\/optin": 1,
                        "\/zero\/optin\/write\/": 1,
                        "\/zero\/optin\/legal\/": 1,
                        "\/zero\/optin\/free\/": 1,
                        "\/about\/privacy\/": 1,
                        "\/about\/privacy\/update\/": 1,
                        "\/about\/privacy\/update": 1,
                        "\/zero\/toggle\/welcome\/": 1,
                        "\/zero\/toggle\/nux\/": 1,
                        "\/fup\/interstitial\/": 1,
                        "\/work\/landing": 1,
                        "\/work\/login\/": 1,
                        "\/work\/email\/": 1,
                        "\/ai.php": 1,
                        "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                        "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                        "\/qp\/interstitial\/": 1,
                        "\/qp\/action\/redirect\/": 1,
                        "\/qp\/action\/close\/": 1,
                        "\/zero\/support\/ineligible\/": 1,
                        "\/zero_balance_redirect\/": 1,
                        "\/zero_balance_redirect": 1,
                        "\/zero_balance_redirect\/l\/": 1,
                        "\/l.php": 1,
                        "\/lsr.php": 1,
                        "\/ajax\/dtsg\/": 1,
                        "\/checkpoint\/block\/": 1,
                        "\/exitdsite": 1,
                        "\/zero\/balance\/pixel\/": 1,
                        "\/zero\/balance\/": 1,
                        "\/zero\/balance\/carrier_landing\/": 1,
                        "\/zero\/flex\/logging\/": 1,
                        "\/tr": 1,
                        "\/tr\/": 1,
                        "\/sem_campaigns\/sem_pixel_test\/": 1,
                        "\/bookmarks\/flyout\/body\/": 1,
                        "\/zero\/subno\/": 1,
                        "\/confirmemail.php": 1,
                        "\/policies\/": 1,
                        "\/mobile\/internetdotorg\/classifier\/": 1,
                        "\/zero\/dogfooding": 1,
                        "\/xti.php": 1,
                        "\/zero\/fblite\/config\/": 1,
                        "\/hr\/zsh\/wc\/": 1,
                        "\/ajax\/bootloader-endpoint\/": 1,
                        "\/4oh4.php": 1,
                        "\/autobackend.php": 1,
                        "\/birthday_help.php": 1,
                        "\/checkpoint\/": 1,
                        "\/contact-importer\/": 1,
                        "\/cr.php": 1,
                        "\/legal\/terms\/": 1,
                        "\/backend.php": 1,
                        "\/login\/": 1,
                        "\/mobile\/account\/": 1,
                        "\/n\/": 1,
                        "\/remote_test_device\/": 1,
                        "\/upsell\/buy\/": 1,
                        "\/upsell\/buyconfirm\/": 1,
                        "\/upsell\/buyresult\/": 1,
                        "\/upsell\/promos\/": 1,
                        "\/upsell\/continue\/": 1,
                        "\/upsell\/h\/promos\/": 1,
                        "\/upsell\/loan\/learnmore\/": 1,
                        "\/upsell\/purchase\/": 1,
                        "\/upsell\/promos\/upgrade\/": 1,
                        "\/upsell\/buy_redirect\/": 1,
                        "\/upsell\/loan\/buyconfirm\/": 1,
                        "\/upsell\/loan\/buy\/": 1,
                        "\/upsell\/sms\/": 1,
                        "\/wap\/a\/channel\/reconnect.php": 1,
                        "\/wap\/a\/nux\/wizard\/nav.php": 1,
                        "\/wap\/appreg.php": 1,
                        "\/wap\/birthday_help.php": 1,
                        "\/wap\/c.php": 1,
                        "\/wap\/confirmemail.php": 1,
                        "\/wap\/cr.php": 1,
                        "\/wap\/backend.php": 1,
                        "\/wap\/r.php": 1,
                        "\/zero\/datapolicy": 1,
                        "\/a\/timezone.php": 1,
                        "\/a\/bz": 1,
                        "\/bz\/reliability": 1,
                        "\/r.php": 1,
                        "\/mr\/": 1,
                        "\/reg\/": 1,
                        "\/registration\/log\/": 1,
                        "\/terms\/": 1,
                        "\/f123\/": 1,
                        "\/expert\/": 1,
                        "\/experts\/": 1,
                        "\/terms\/index.php": 1,
                        "\/terms.php": 1,
                        "\/srr\/": 1,
                        "\/msite\/redirect\/": 1,
                        "\/fbs\/pixel\/": 1,
                        "\/contactpoint\/preconfirmation\/": 1,
                        "\/contactpoint\/cliff\/": 1,
                        "\/contactpoint\/confirm\/submit\/": 1,
                        "\/contactpoint\/confirmed\/": 1,
                        "\/contactpoint\/login\/": 1,
                        "\/preconfirmation\/contactpoint_change\/": 1,
                        "\/help\/contact\/": 1,
                        "\/survey\/": 1,
                        "\/upsell\/loyaltytopup\/accept\/": 1,
                        "\/settings\/": 1,
                        "\/lite\/": 1,
                        "\/zero_status_update\/": 1
                    }
                }, 1478], ["IntlHoldoutGK", [], {"inIntlHoldout": false}, 2827], ["IntlNumberTypeConfig", [], {"impl": "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"}, 3405], ["FbtQTOverrides", [], {"overrides": {}}, 551], ["DataStoreConfig", [], {
                    "expandoKey": "__FB_STORE",
                    "useExpando": true
                }, 2915], ["cr:696703", [], {"__rc": [null, "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:708886", ["EventProfilerImpl"], {"__rc": ["EventProfilerImpl", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:717822", ["TimeSliceImpl"], {"__rc": ["TimeSliceImpl", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:806696", ["clearTimeoutBlue"], {"__rc": ["clearTimeoutBlue", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:807042", ["setTimeoutBlue"], {"__rc": ["setTimeoutBlue", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:896462", ["setIntervalAcrossTransitionsBlue"], {"__rc": ["setIntervalAcrossTransitionsBlue", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:986633", ["setTimeoutAcrossTransitionsBlue"], {"__rc": ["setTimeoutAcrossTransitionsBlue", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:1003267", ["clearIntervalBlue"], {"__rc": ["clearIntervalBlue", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:896461", ["setIntervalBlue"], {"__rc": ["setIntervalBlue", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:1183579", ["InlineFbtResultImpl"], {"__rc": ["InlineFbtResultImpl", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:1454227", ["BanzaiBase"], {"__rc": ["BanzaiBase", "Aa2T1n4ufekdFFlAt8nS8ipLdErcwNwYtaf4HZnHUiW_ZvMm-e4zpnBtStu4KAoUxQsLWFarnYhnBVMT7kJcBt1YJqgoc46B"]}, -1], ["cr:729414", ["VisualCompletion"], {"__rc": ["VisualCompletion", "Aa0r8oqeN441OjwKTyIMraBECAZSn4IEriL3hkGmwvPn1R4yjmLvS9I0ZrHFb5oCwBF_pTfImZLgfzJjXn7m"]}, -1], ["cr:1094907", [], {"__rc": [null, "Aa2LsFiGlSollppMbO4pwe4OfWsGrJ9N8Ou5JZeweyyIE8ZWdiOqEJzjM_K19eZzROo51b6O9AXFtv44Q3U"]}, -1], ["EventConfig", [], {
                    "sampling": {
                        "bandwidth": 0,
                        "play": 0,
                        "playing": 0,
                        "progress": 0,
                        "pause": 0,
                        "ended": 0,
                        "seeked": 0,
                        "seeking": 0,
                        "waiting": 0,
                        "loadedmetadata": 0,
                        "canplay": 0,
                        "selectionchange": 0,
                        "change": 0,
                        "timeupdate": 0,
                        "adaptation": 0,
                        "focus": 0,
                        "blur": 0,
                        "load": 0,
                        "error": 0,
                        "message": 0,
                        "abort": 0,
                        "storage": 0,
                        "scroll": 200000,
                        "mousemove": 20000,
                        "mouseover": 10000,
                        "mouseout": 10000,
                        "mousewheel": 1,
                        "MSPointerMove": 10000,
                        "keydown": 0.1,
                        "click": 0.02,
                        "mouseup": 0.02,
                        "__100ms": 0.001,
                        "__default": 5000,
                        "__min": 100,
                        "__interactionDefault": 200,
                        "__eventDefault": 100000
                    },
                    "page_sampling_boost": 1,
                    "interaction_regexes": {
                        "BlueBarAccountChevronMenu": " _5lxs(?: .*)?$",
                        "BlueBarHomeButton": " _bluebarLinkHome__interaction-root(?: .*)?$",
                        "BlueBarProfileLink": " _1k67(?: .*)?$",
                        "ReactComposerSproutMedia": " _1pnt(?: .*)?$",
                        "ReactComposerSproutAlbum": " _1pnu(?: .*)?$",
                        "ReactComposerSproutNote": " _3-9x(?: .*)?$",
                        "ReactComposerSproutLocation": " _1pnv(?: .*)?$",
                        "ReactComposerSproutActivity": " _1pnz(?: .*)?$",
                        "ReactComposerSproutPeople": " _1pn-(?: .*)?$",
                        "ReactComposerSproutLiveVideo": " _5tv7(?: .*)?$",
                        "ReactComposerSproutMarkdown": " _311p(?: .*)?$",
                        "ReactComposerSproutFormattedText": " _mwg(?: .*)?$",
                        "ReactComposerSproutSticker": " _2vri(?: .*)?$",
                        "ReactComposerSproutSponsor": " _5t5q(?: .*)?$",
                        "ReactComposerSproutEllipsis": " _1gr3(?: .*)?$",
                        "ReactComposerSproutContactYourRepresentative": " _3cnv(?: .*)?$",
                        "ReactComposerSproutFunFact": " _2_xs(?: .*)?$",
                        "TextExposeSeeMoreLink": " see_more_link(?: .*)?$",
                        "SnowliftBigCloseButton": "(?: _xlt(?: .*)? _418x(?: .*)?$| _418x(?: .*)? _xlt(?: .*)?$)",
                        "SnowliftPrevPager": "(?: snowliftPager(?: .*)? prev(?: .*)?$| prev(?: .*)? snowliftPager(?: .*)?$)",
                        "SnowliftNextPager": "(?: snowliftPager(?: .*)? next(?: .*)?$| next(?: .*)? snowliftPager(?: .*)?$)",
                        "SnowliftFullScreenButton": "#fbPhotoSnowliftFullScreenSwitch( .+)*",
                        "PrivacySelectorMenu": "(?: _57di(?: .*)? _2wli(?: .*)?$| _2wli(?: .*)? _57di(?: .*)?$)",
                        "ReactComposerFeedXSprouts": " _nh6(?: .*)?$",
                        "SproutsComposerStatusTab": " _sg1(?: .*)?$",
                        "SproutsComposerLiveVideoTab": " _sg1(?: .*)?$",
                        "SproutsComposerAlbumTab": " _sg1(?: .*)?$",
                        "composerAudienceSelector": " _ej0(?: .*)?$",
                        "FeedHScrollAttachmentsPrevPager": " _1qqy(?: .*)?$",
                        "FeedHScrollAttachmentsNextPager": " _1qqz(?: .*)?$",
                        "DockChatTabFlyout": " fbDockChatTabFlyout(?: .*)?$",
                        "PrivacyLiteJewel": " _59fc(?: .*)?$",
                        "ActorSelector": " _6vh(?: .*)?$",
                        "LegacyMentionsInput": "(?: ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)? _2xwx(?: .*)?$| uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)?$| _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)?$| ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)? uiMentionsInput(?: .*)?$| uiMentionsInput(?: .*)? _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)?$| _2xwx(?: .*)? uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)?$)",
                        "UFIActionLinksEmbedLink": " _2g1w(?: .*)?$",
                        "UFIPhotoAttachLink": " UFIPhotoAttachLinkWrapper(?: .*)?$",
                        "UFIMentionsInputProxy": " _1osa(?: .*)?$",
                        "UFIMentionsInputDummy": " _1osc(?: .*)?$",
                        "UFIOrderingModeSelector": " _3scp(?: .*)?$",
                        "UFIPager": "(?: UFIPagerRow(?: .*)? UFIRow(?: .*)?$| UFIRow(?: .*)? UFIPagerRow(?: .*)?$)",
                        "UFIReplyRow": "(?: UFIReplyRow(?: .*)? UFICommentReply(?: .*)?$| UFICommentReply(?: .*)? UFIReplyRow(?: .*)?$)",
                        "UFIReplySocialSentence": " UFIReplySocialSentenceRow(?: .*)?$",
                        "UFIShareLink": " _5f9b(?: .*)?$",
                        "UFIStickerButton": " UFICommentStickerButton(?: .*)?$",
                        "MentionsInput": " _5yk1(?: .*)?$",
                        "FantaChatTabRoot": " _3_9e(?: .*)?$",
                        "SnowliftViewableRoot": " _2-sx(?: .*)?$",
                        "ReactBlueBarJewelButton": " _5fwr(?: .*)?$",
                        "UFIReactionsDialogLayerImpl": " _1oxk(?: .*)?$",
                        "UFIReactionsLikeLinkImpl": " _4x9_(?: .*)?$",
                        "UFIReactionsLinkImplRoot": " _khz(?: .*)?$",
                        "Reaction": " _iuw(?: .*)?$",
                        "UFIReactionsMenuImpl": " _iu-(?: .*)?$",
                        "UFIReactionsSpatialReactionIconContainer": " _1fq9(?: .*)?$",
                        "VideoComponentPlayButton": " _bsl(?: .*)?$",
                        "FeedOptionsPopover": " _b1e(?: .*)?$",
                        "UFICommentLikeCount": " UFICommentLikeButton(?: .*)?$",
                        "UFICommentLink": " _5yxe(?: .*)?$",
                        "ChatTabComposerInputContainer": " _552h(?: .*)?$",
                        "ChatTabHeader": " _15p4(?: .*)?$",
                        "DraftEditor": " _5rp7(?: .*)?$",
                        "ChatSideBarDropDown": " _5vm9(?: .*)?$",
                        "SearchBox": " _539-(?: .*)?$",
                        "ChatSideBarLink": " _55ln(?: .*)?$",
                        "MessengerSearchTypeahead": " _3rh8(?: .*)?$",
                        "NotificationListItem": " _33c(?: .*)?$",
                        "MessageJewelListItem": " messagesContent(?: .*)?$",
                        "Messages_Jewel_Button": " _3eo8(?: .*)?$",
                        "Notifications_Jewel_Button": " _3eo9(?: .*)?$",
                        "snowliftopen": " _342u(?: .*)?$",
                        "NoteTextSeeMoreLink": " _3qd_(?: .*)?$",
                        "fbFeedOptionsPopover": " _1he6(?: .*)?$",
                        "Requests_Jewel_Button": " _3eoa(?: .*)?$",
                        "UFICommentActionLinkAjaxify": " _15-3(?: .*)?$",
                        "UFICommentActionLinkRedirect": " _15-6(?: .*)?$",
                        "UFICommentActionLinkDispatched": " _15-7(?: .*)?$",
                        "UFICommentCloseButton": " _36rj(?: .*)?$",
                        "UFICommentActionsRemovePreview": " _460h(?: .*)?$",
                        "UFICommentActionsReply": " _460i(?: .*)?$",
                        "UFICommentActionsSaleItemMessage": " _460j(?: .*)?$",
                        "UFICommentActionsAcceptAnswer": " _460k(?: .*)?$",
                        "UFICommentActionsUnacceptAnswer": " _460l(?: .*)?$",
                        "UFICommentReactionsLikeLink": " _3-me(?: .*)?$",
                        "UFICommentMenu": " _1-be(?: .*)?$",
                        "UFIMentionsInputFallback": " _289b(?: .*)?$",
                        "UFIMentionsInputComponent": " _289c(?: .*)?$",
                        "UFIMentionsInputProxyInput": " _432z(?: .*)?$",
                        "UFIMentionsInputProxyDummy": " _432-(?: .*)?$",
                        "UFIPrivateReplyLinkMessage": " _14hj(?: .*)?$",
                        "UFIPrivateReplyLinkSeeReply": " _14hk(?: .*)?$",
                        "ChatCloseButton": " _4vu4(?: .*)?$",
                        "ChatTabComposerPhotoUploader": " _13f-(?: .*)?$",
                        "ChatTabComposerGroupPollingButton": " _13f_(?: .*)?$",
                        "ChatTabComposerGames": " _13ga(?: .*)?$",
                        "ChatTabComposerPlan": " _13gb(?: .*)?$",
                        "ChatTabComposerFileUploader": " _13gd(?: .*)?$",
                        "ChatTabStickersButton": " _13ge(?: .*)?$",
                        "ChatTabComposerGifButton": " _13gf(?: .*)?$",
                        "ChatTabComposerEmojiPicker": " _13gg(?: .*)?$",
                        "ChatTabComposerLikeButton": " _13gi(?: .*)?$",
                        "ChatTabComposerP2PButton": " _13gj(?: .*)?$",
                        "ChatTabComposerQuickCam": " _13gk(?: .*)?$",
                        "ChatTabHeaderAudioRTCButton": " _461a(?: .*)?$",
                        "ChatTabHeaderVideoRTCButton": " _461b(?: .*)?$",
                        "ChatTabHeaderOptionsButton": " _461_(?: .*)?$",
                        "ChatTabHeaderAddToThreadButton": " _4620(?: .*)?$",
                        "ReactComposerMediaSprout": " _fk5(?: .*)?$",
                        "UFIReactionsBlingSocialSentenceComments": " _-56(?: .*)?$",
                        "UFIReactionsBlingSocialSentenceSeens": " _2x0l(?: .*)?$",
                        "UFIReactionsBlingSocialSentenceShares": " _2x0m(?: .*)?$",
                        "UFIReactionsBlingSocialSentenceViews": " _-5c(?: .*)?$",
                        "UFIReactionsBlingSocialSentence": " _-5d(?: .*)?$",
                        "UFIReactionsSocialSentence": " _1vaq(?: .*)?$",
                        "VideoFullscreenButton": " _39ip(?: .*)?$",
                        "Tahoe": " _400z(?: .*)?$",
                        "TahoeFromVideoPlayer": " _1vek(?: .*)?$",
                        "TahoeFromVideoLink": " _2-40(?: .*)?$",
                        "TahoeFromPhoto": " _2ju5(?: .*)?$",
                        "FBStoryTrayItem": " _1fvw(?: .*)?$",
                        "Mobile_Feed_Jewel_Button": "#feed_jewel( .+)*",
                        "Mobile_Requests_Jewel_Button": "#requests_jewel( .+)*",
                        "Mobile_Messages_Jewel_Button": "#messages_jewel( .+)*",
                        "Mobile_Notifications_Jewel_Button": "#notifications_jewel( .+)*",
                        "Mobile_Search_Jewel_Button": "#search_jewel( .+)*",
                        "Mobile_Bookmarks_Jewel_Button": "#bookmarks_jewel( .+)*",
                        "Mobile_Feed_UFI_Comment_Button_Permalink": " _l-a(?: .*)?$",
                        "Mobile_Feed_UFI_Comment_Button_Flyout": " _4qeq(?: .*)?$",
                        "Mobile_Feed_UFI_Token_Bar_Flyout": " _4qer(?: .*)?$",
                        "Mobile_Feed_UFI_Token_Bar_Permalink": " _4-09(?: .*)?$",
                        "Mobile_UFI_Share_Button": " _15kr(?: .*)?$",
                        "Mobile_Feed_Photo_Permalink": " _1mh-(?: .*)?$",
                        "Mobile_Feed_Video_Permalink": " _65g_(?: .*)?$",
                        "Mobile_Feed_Profile_Permalink": " _4kk6(?: .*)?$",
                        "Mobile_Feed_Story_Permalink": " _26yo(?: .*)?$",
                        "Mobile_Feed_Page_Permalink": " _4e81(?: .*)?$",
                        "Mobile_Feed_Group_Permalink": " _20u1(?: .*)?$",
                        "Mobile_Feed_Event_Permalink": " _20u0(?: .*)?$",
                        "ProfileIntroCardAddFeaturedMedia": " _30qr(?: .*)?$",
                        "ProfileSectionAbout": " _84wb(?: .*)?$",
                        "ProfileSectionAllRelationships": " _84wc(?: .*)?$",
                        "ProfileSectionAtWork": " _2fnv(?: .*)?$",
                        "ProfileSectionContactBasic": " _84vf(?: .*)?$",
                        "ProfileSectionEducation": " _84vh(?: .*)?$",
                        "ProfileSectionOverview": " _84vj(?: .*)?$",
                        "ProfileSectionPlaces": " _84vg(?: .*)?$",
                        "ProfileSectionYearOverviews": " _84vi(?: .*)?$",
                        "IntlPolyglotHomepage": " _Interaction__IntlPolyglotVoteActivityCardButton(?: .*)?$",
                        "ProtonElementSelection": " _67ft(?: .*)?$"
                    },
                    "interaction_boost": {
                        "SnowliftPrevPager": 0.2,
                        "SnowliftNextPager": 0.2,
                        "ChatSideBarLink": 2,
                        "MessengerSearchTypeahead": 2,
                        "Messages_Jewel_Button": 2.5,
                        "Notifications_Jewel_Button": 1.5,
                        "Tahoe": 30,
                        "ProtonElementSelection": 4
                    },
                    "event_types": {
                        "BlueBarAccountChevronMenu": ["click"],
                        "BlueBarHomeButton": ["click"],
                        "BlueBarProfileLink": ["click"],
                        "ReactComposerSproutMedia": ["click"],
                        "ReactComposerSproutAlbum": ["click"],
                        "ReactComposerSproutNote": ["click"],
                        "ReactComposerSproutLocation": ["click"],
                        "ReactComposerSproutActivity": ["click"],
                        "ReactComposerSproutPeople": ["click"],
                        "ReactComposerSproutLiveVideo": ["click"],
                        "ReactComposerSproutMarkdown": ["click"],
                        "ReactComposerSproutFormattedText": ["click"],
                        "ReactComposerSproutSticker": ["click"],
                        "ReactComposerSproutSponsor": ["click"],
                        "ReactComposerSproutEllipsis": ["click"],
                        "ReactComposerSproutContactYourRepresentative": ["click"],
                        "ReactComposerSproutFunFact": ["click"],
                        "TextExposeSeeMoreLink": ["click"],
                        "SnowliftBigCloseButton": ["click"],
                        "SnowliftPrevPager": ["click"],
                        "SnowliftNextPager": ["click"],
                        "SnowliftFullScreenButton": ["click"],
                        "PrivacySelectorMenu": ["click"],
                        "ReactComposerFeedXSprouts": ["click"],
                        "SproutsComposerStatusTab": ["click"],
                        "SproutsComposerLiveVideoTab": ["click"],
                        "SproutsComposerAlbumTab": ["click"],
                        "composerAudienceSelector": ["click"],
                        "FeedHScrollAttachmentsPrevPager": ["click"],
                        "FeedHScrollAttachmentsNextPager": ["click"],
                        "DockChatTabFlyout": ["click"],
                        "PrivacyLiteJewel": ["click"],
                        "ActorSelector": ["click"],
                        "LegacyMentionsInput": ["click"],
                        "UFIActionLinksEmbedLink": ["click"],
                        "UFIPhotoAttachLink": ["click"],
                        "UFIMentionsInputProxy": ["click"],
                        "UFIMentionsInputDummy": ["click"],
                        "UFIOrderingModeSelector": ["click"],
                        "UFIPager": ["click"],
                        "UFIReplyRow": ["click"],
                        "UFIReplySocialSentence": ["click"],
                        "UFIShareLink": ["click"],
                        "UFIStickerButton": ["click"],
                        "MentionsInput": ["click"],
                        "FantaChatTabRoot": ["click"],
                        "SnowliftViewableRoot": ["click"],
                        "ReactBlueBarJewelButton": ["click"],
                        "UFIReactionsDialogLayerImpl": ["click"],
                        "UFIReactionsLikeLinkImpl": ["click"],
                        "UFIReactionsLinkImplRoot": ["click"],
                        "Reaction": ["click"],
                        "UFIReactionsMenuImpl": ["click"],
                        "UFIReactionsSpatialReactionIconContainer": ["click"],
                        "VideoComponentPlayButton": ["click"],
                        "FeedOptionsPopover": ["click"],
                        "UFICommentLikeCount": ["click"],
                        "UFICommentLink": ["click"],
                        "ChatTabComposerInputContainer": ["click"],
                        "ChatTabHeader": ["click"],
                        "DraftEditor": ["click"],
                        "ChatSideBarDropDown": ["click"],
                        "SearchBox": ["click"],
                        "ChatSideBarLink": ["mouseup"],
                        "MessengerSearchTypeahead": ["click"],
                        "NotificationListItem": ["click"],
                        "MessageJewelListItem": ["click"],
                        "Messages_Jewel_Button": ["click"],
                        "Notifications_Jewel_Button": ["click"],
                        "snowliftopen": ["click"],
                        "NoteTextSeeMoreLink": ["click"],
                        "fbFeedOptionsPopover": ["click"],
                        "Requests_Jewel_Button": ["click"],
                        "UFICommentActionLinkAjaxify": ["click"],
                        "UFICommentActionLinkRedirect": ["click"],
                        "UFICommentActionLinkDispatched": ["click"],
                        "UFICommentCloseButton": ["click"],
                        "UFICommentActionsRemovePreview": ["click"],
                        "UFICommentActionsReply": ["click"],
                        "UFICommentActionsSaleItemMessage": ["click"],
                        "UFICommentActionsAcceptAnswer": ["click"],
                        "UFICommentActionsUnacceptAnswer": ["click"],
                        "UFICommentReactionsLikeLink": ["click"],
                        "UFICommentMenu": ["click"],
                        "UFIMentionsInputFallback": ["click"],
                        "UFIMentionsInputComponent": ["click"],
                        "UFIMentionsInputProxyInput": ["click"],
                        "UFIMentionsInputProxyDummy": ["click"],
                        "UFIPrivateReplyLinkMessage": ["click"],
                        "UFIPrivateReplyLinkSeeReply": ["click"],
                        "ChatCloseButton": ["click"],
                        "ChatTabComposerPhotoUploader": ["click"],
                        "ChatTabComposerGroupPollingButton": ["click"],
                        "ChatTabComposerGames": ["click"],
                        "ChatTabComposerPlan": ["click"],
                        "ChatTabComposerFileUploader": ["click"],
                        "ChatTabStickersButton": ["click"],
                        "ChatTabComposerGifButton": ["click"],
                        "ChatTabComposerEmojiPicker": ["click"],
                        "ChatTabComposerLikeButton": ["click"],
                        "ChatTabComposerP2PButton": ["click"],
                        "ChatTabComposerQuickCam": ["click"],
                        "ChatTabHeaderAudioRTCButton": ["click"],
                        "ChatTabHeaderVideoRTCButton": ["click"],
                        "ChatTabHeaderOptionsButton": ["click"],
                        "ChatTabHeaderAddToThreadButton": ["click"],
                        "ReactComposerMediaSprout": ["click"],
                        "UFIReactionsBlingSocialSentenceComments": ["click"],
                        "UFIReactionsBlingSocialSentenceSeens": ["click"],
                        "UFIReactionsBlingSocialSentenceShares": ["click"],
                        "UFIReactionsBlingSocialSentenceViews": ["click"],
                        "UFIReactionsBlingSocialSentence": ["click"],
                        "UFIReactionsSocialSentence": ["click"],
                        "VideoFullscreenButton": ["click"],
                        "Tahoe": ["click"],
                        "TahoeFromVideoPlayer": ["click"],
                        "TahoeFromVideoLink": ["click"],
                        "TahoeFromPhoto": ["click"],
                        "": ["click"],
                        "FBStoryTrayItem": ["click"],
                        "Mobile_Feed_Jewel_Button": ["click"],
                        "Mobile_Requests_Jewel_Button": ["click"],
                        "Mobile_Messages_Jewel_Button": ["click"],
                        "Mobile_Notifications_Jewel_Button": ["click"],
                        "Mobile_Search_Jewel_Button": ["click"],
                        "Mobile_Bookmarks_Jewel_Button": ["click"],
                        "Mobile_Feed_UFI_Comment_Button_Permalink": ["click"],
                        "Mobile_Feed_UFI_Comment_Button_Flyout": ["click"],
                        "Mobile_Feed_UFI_Token_Bar_Flyout": ["click"],
                        "Mobile_Feed_UFI_Token_Bar_Permalink": ["click"],
                        "Mobile_UFI_Share_Button": ["click"],
                        "Mobile_Feed_Photo_Permalink": ["click"],
                        "Mobile_Feed_Video_Permalink": ["click"],
                        "Mobile_Feed_Profile_Permalink": ["click"],
                        "Mobile_Feed_Story_Permalink": ["click"],
                        "Mobile_Feed_Page_Permalink": ["click"],
                        "Mobile_Feed_Group_Permalink": ["click"],
                        "Mobile_Feed_Event_Permalink": ["click"],
                        "ProfileIntroCardAddFeaturedMedia": ["click"],
                        "ProfileSectionAbout": ["click"],
                        "ProfileSectionAllRelationships": ["click"],
                        "ProfileSectionAtWork": ["click"],
                        "ProfileSectionContactBasic": ["click"],
                        "ProfileSectionEducation": ["click"],
                        "ProfileSectionOverview": ["click"],
                        "ProfileSectionPlaces": ["click"],
                        "ProfileSectionYearOverviews": ["click"],
                        "IntlPolyglotHomepage": ["click"],
                        "ProtonElementSelection": ["click"]
                    },
                    "manual_instrumentation": true,
                    "profile_eager_execution": true,
                    "disable_heuristic": true,
                    "disable_event_profiler": false
                }, 1726], ["AdsInterfacesSessionConfig", [], {}, 2393], ["TimeSliceInteractionSV", [], {
                    "on_demand_reference_counting": true,
                    "on_demand_profiling_counters": true,
                    "default_rate": 1000,
                    "lite_default_rate": 100,
                    "interaction_to_lite_coinflip": {
                        "ADS_INTERFACES_INTERACTION": 0,
                        "ads_perf_scenario": 0,
                        "ads_wait_time": 0,
                        "Event": 1,
                        "video_psr": 0,
                        "video_stall": 0
                    },
                    "interaction_to_coinflip": {
                        "ADS_INTERFACES_INTERACTION": 1,
                        "ads_perf_scenario": 1,
                        "ads_wait_time": 1,
                        "video_psr": 1000000,
                        "video_stall": 2500000,
                        "Event": 100,
                        "cms_editor": 1,
                        "pixelcloud_view_performance": 25,
                        "intern_notify_inbox_page_load": 10,
                        "intern_notify_jewel_list_load": 10,
                        "tasks_initial_page_load": 1,
                        "watch_carousel_left_scroll": 1,
                        "watch_carousel_right_scroll": 1,
                        "watch_sections_load_more": 1,
                        "watch_discover_scroll": 1,
                        "fbpkg_ui": 1,
                        "sevmanager_powersearch_initial_page_load": 10,
                        "network_ui": 1,
                        "daiquery_interactive_query": 1
                    },
                    "enable_heartbeat": true,
                    "maxBlockMergeDuration": 0,
                    "maxBlockMergeDistance": 0,
                    "enable_banzai_stream": true,
                    "user_timing_coinflip": 50,
                    "banzai_stream_coinflip": 1,
                    "compression_enabled": true,
                    "ref_counting_fix": false,
                    "ref_counting_cont_fix": false,
                    "also_record_new_timeslice_format": false,
                    "force_async_request_tracing_on": false
                }, 2609], ["BanzaiConfig", [], {
                    "MAX_SIZE": 10000,
                    "MAX_WAIT": 150000,
                    "RESTORE_WAIT": 150000,
                    "blacklist": ["time_spent"],
                    "gks": {
                        "boosted_pagelikes": true,
                        "mercury_send_error_logging": true,
                        "platform_oauth_client_events": true,
                        "xtrackable_clientview_batch": true,
                        "visibility_tracking": true,
                        "graphexplorer": true,
                        "sticker_search_ranking": true
                    }
                }, 7], ["QuickLogConfig", [], {
                    "qpl_events": {
                        "393276": {"sampleRate": 50},
                        "470653": {"sampleRate": 400},
                        "473017": {"sampleRate": 400},
                        "483251": {"sampleRate": 400},
                        "655575": {"sampleRate": 1},
                        "655576": {"sampleRate": 5000},
                        "655584": {"sampleRate": 1},
                        "655653": {"sampleRate": 250},
                        "917556": {"sampleRate": 100},
                        "917557": {"sampleRate": 1000},
                        "1916714": {"sampleRate": 250},
                        "3473463": {"sampleRate": 1},
                        "3473464": {"sampleRate": 1},
                        "3473465": {"sampleRate": 10},
                        "3735589": {"sampleRate": 100},
                        "3735590": {"sampleRate": 1000},
                        "3735591": {"sampleRate": 100},
                        "3735592": {"sampleRate": 1000},
                        "3735593": {"sampleRate": 1000},
                        "3735594": {"sampleRate": 1000},
                        "3735595": {"sampleRate": 100},
                        "3735596": {"sampleRate": 1000},
                        "3735597": {"sampleRate": 1000},
                        "3735598": {"sampleRate": 100},
                        "3735599": {"sampleRate": 1000},
                        "3735600": {"sampleRate": 100},
                        "3735601": {"sampleRate": 100},
                        "3735602": {"sampleRate": 10000},
                        "3735603": {"sampleRate": 10000},
                        "3735604": {"sampleRate": 100},
                        "3735605": {"sampleRate": 100},
                        "3735606": {"sampleRate": 1},
                        "3735608": {"sampleRate": 250},
                        "3735609": {"sampleRate": 250},
                        "3735610": {"sampleRate": 250},
                        "3735611": {"sampleRate": 250},
                        "3735612": {"sampleRate": 250},
                        "3735613": {"sampleRate": 250},
                        "3735614": {"sampleRate": 250},
                        "3735615": {"sampleRate": 250},
                        "3735616": {"sampleRate": 250},
                        "3735617": {"sampleRate": 250},
                        "3735618": {"sampleRate": 50},
                        "3735619": {"sampleRate": 50},
                        "3735620": {"sampleRate": 50},
                        "3735622": {"sampleRate": 50},
                        "3735623": {"sampleRate": 500},
                        "3735624": {"sampleRate": 500},
                        "3735625": {"sampleRate": 1},
                        "3735626": {"sampleRate": 50},
                        "3735627": {"sampleRate": 50},
                        "3735628": {"sampleRate": 250},
                        "7077894": {"sampleRate": 1},
                        "7079940": {"sampleRate": 1},
                        "7081993": {"sampleRate": 1},
                        "7083971": {"sampleRate": 1},
                        "7087889": {"sampleRate": 1},
                        "7088916": {"sampleRate": 100},
                        "7091307": {"sampleRate": 1},
                        "7092490": {"sampleRate": 1},
                        "7733271": {"sampleRate": 1},
                        "7995400": {"sampleRate": 1},
                        "7995408": {"sampleRate": 100},
                        "11075649": {"sampleRate": 1},
                        "11075654": {"sampleRate": 1},
                        "11075669": {"sampleRate": 1},
                        "11075674": {"sampleRate": 1},
                        "12451850": {"sampleRate": 1},
                        "12451854": {"sampleRate": 1},
                        "12451859": {"sampleRate": 1},
                        "12451868": {"sampleRate": 1},
                        "12451869": {"sampleRate": 1},
                        "12451873": {"sampleRate": 10000},
                        "13238313": {"sampleRate": 100},
                        "13238314": {"sampleRate": 100},
                        "13238353": {"sampleRate": 100},
                        "13238354": {"sampleRate": 100},
                        "13238355": {"sampleRate": 100},
                        "13238356": {"sampleRate": 100},
                        "13238392": {"sampleRate": 100},
                        "13238398": {"sampleRate": 100},
                        "13238399": {"sampleRate": 100},
                        "13238400": {"sampleRate": 100},
                        "17825794": {"sampleRate": 250},
                        "20578320": {"sampleRate": 1000000},
                        "22347782": {"sampleRate": 100},
                        "22609921": {"sampleRate": 10000},
                        "22675460": {"sampleRate": 250},
                        "23265284": {"sampleRate": 1},
                        "23265285": {"sampleRate": 1},
                        "23265286": {"sampleRate": 1},
                        "23461896": {"sampleRate": 1},
                        "23461897": {"sampleRate": 1},
                        "23461898": {"sampleRate": 1},
                        "23461899": {"sampleRate": 1},
                        "23461900": {"sampleRate": 1},
                        "23461901": {"sampleRate": 1},
                        "23461902": {"sampleRate": 1},
                        "23473227": {"sampleRate": 1},
                        "23491362": {"sampleRate": 1},
                        "23855114": {"sampleRate": 1},
                        "25296897": {"sampleRate": 1},
                        "25296900": {"sampleRate": 10000},
                        "25296901": {"sampleRate": 1},
                        "25296902": {"sampleRate": 1},
                        "25296903": {"sampleRate": 10000},
                        "25296904": {"sampleRate": 10000},
                        "25296905": {"sampleRate": 10000},
                        "25296906": {"sampleRate": 10000},
                        "26869761": {"sampleRate": 1},
                        "26869762": {"sampleRate": 1},
                        "26869763": {"sampleRate": 1},
                        "26869764": {"sampleRate": 1},
                        "26869766": {"sampleRate": 1},
                        "26869767": {"sampleRate": 1},
                        "26869768": {"sampleRate": 1},
                        "26869770": {"sampleRate": 1},
                        "26869771": {"sampleRate": 1},
                        "26869772": {"sampleRate": 1},
                        "26891822": {"sampleRate": 1},
                        "26898960": {"sampleRate": 1},
                        "27459588": {"sampleRate": 5000},
                        "27459589": {"sampleRate": 1},
                        "27459590": {"sampleRate": 10},
                        "27459591": {"sampleRate": 1},
                        "27787270": {"sampleRate": 100000},
                        "27787271": {"sampleRate": 10000},
                        "27787276": {"sampleRate": 10000},
                        "27983873": {"sampleRate": 1},
                        "27983874": {"sampleRate": 1},
                        "27983875": {"sampleRate": 1},
                        "27983876": {"sampleRate": 1},
                        "27983877": {"sampleRate": 1},
                        "29818881": {"sampleRate": 1},
                        "29818882": {"sampleRate": 1},
                        "29818883": {"sampleRate": 1},
                        "29818884": {"sampleRate": 1},
                        "29949953": {"sampleRate": 1},
                        "29949955": {"sampleRate": 1},
                        "30408705": {"sampleRate": 1},
                        "30408706": {"sampleRate": 1},
                        "30408707": {"sampleRate": 1},
                        "30408708": {"sampleRate": 1},
                        "30408709": {"sampleRate": 1},
                        "30408710": {"sampleRate": 1},
                        "30408711": {"sampleRate": 1},
                        "30408712": {"sampleRate": 1},
                        "30605313": {"sampleRate": 100},
                        "30605314": {"sampleRate": 100},
                        "30605315": {"sampleRate": 100},
                        "30605316": {"sampleRate": 1},
                        "30605317": {"sampleRate": 1},
                        "30605319": {"sampleRate": 1},
                        "30605320": {"sampleRate": 1},
                        "30605321": {"sampleRate": 1},
                        "30605322": {"sampleRate": 1},
                        "30605323": {"sampleRate": 1},
                        "30605324": {"sampleRate": 1},
                        "30605325": {"sampleRate": 1},
                        "30605326": {"sampleRate": 1},
                        "30605328": {"sampleRate": 1},
                        "30605329": {"sampleRate": 1},
                        "30605330": {"sampleRate": 1},
                        "30605331": {"sampleRate": 1},
                        "30605333": {"sampleRate": 1},
                        "30605334": {"sampleRate": 1},
                        "30605335": {"sampleRate": 1},
                        "30605336": {"sampleRate": 1},
                        "30605337": {"sampleRate": 1},
                        "30605338": {"sampleRate": 1},
                        "30605339": {"sampleRate": 1},
                        "30605340": {"sampleRate": 1},
                        "30605341": {"sampleRate": 1},
                        "30605342": {"sampleRate": 1},
                        "30605343": {"sampleRate": 1},
                        "30605344": {"sampleRate": 1},
                        "30605345": {"sampleRate": 1},
                        "30605346": {"sampleRate": 1},
                        "30605347": {"sampleRate": 1},
                        "30605348": {"sampleRate": 1},
                        "30605349": {"sampleRate": 1},
                        "30605350": {"sampleRate": 1},
                        "30605351": {"sampleRate": 1},
                        "30605352": {"sampleRate": 1},
                        "30605353": {"sampleRate": 1},
                        "30605354": {"sampleRate": 1},
                        "30605355": {"sampleRate": 1},
                        "30605356": {"sampleRate": 1},
                        "30605357": {"sampleRate": 1},
                        "30605358": {"sampleRate": 1},
                        "30605360": {"sampleRate": 1},
                        "30605361": {"sampleRate": 1},
                        "30605362": {"sampleRate": 1},
                        "30605363": {"sampleRate": 1},
                        "30605364": {"sampleRate": 1},
                        "30605366": {"sampleRate": 1},
                        "30605367": {"sampleRate": 1},
                        "30605368": {"sampleRate": 1},
                        "30605369": {"sampleRate": 1},
                        "30605370": {"sampleRate": 1},
                        "30605371": {"sampleRate": 1},
                        "30605373": {"sampleRate": 1},
                        "30605374": {"sampleRate": 1},
                        "30605375": {"sampleRate": 1},
                        "30605376": {"sampleRate": 1},
                        "30605378": {"sampleRate": 1},
                        "30605380": {"sampleRate": 1},
                        "30605381": {"sampleRate": 1},
                        "30605382": {"sampleRate": 1},
                        "30605384": {"sampleRate": 1},
                        "30605386": {"sampleRate": 1},
                        "30605387": {"sampleRate": 1},
                        "30605388": {"sampleRate": 1},
                        "30605389": {"sampleRate": 1},
                        "30605390": {"sampleRate": 1},
                        "30605391": {"sampleRate": 1},
                        "30605392": {"sampleRate": 1},
                        "30605393": {"sampleRate": 1},
                        "30613596": {"sampleRate": 1},
                        "32374785": {"sampleRate": 10000},
                        "32702465": {"sampleRate": 1},
                        "33488897": {"sampleRate": 1},
                        "33488898": {"sampleRate": 1},
                        "33488899": {"sampleRate": 1},
                        "33488900": {"sampleRate": 1},
                        "33488901": {"sampleRate": 1800},
                        "33488902": {"sampleRate": 1},
                        "33488903": {"sampleRate": 1},
                        "33488904": {"sampleRate": 1},
                        "33488905": {"sampleRate": 1},
                        "33619969": {"sampleRate": 1},
                        "35586051": {"sampleRate": 10},
                        "35586052": {"sampleRate": 1000},
                        "35586053": {"sampleRate": 1000},
                        "35651585": {"sampleRate": 1},
                        "35651586": {"sampleRate": 1},
                        "35651587": {"sampleRate": 1},
                        "35651588": {"sampleRate": 1},
                        "35651589": {"sampleRate": 1},
                        "35651590": {"sampleRate": 1},
                        "35651591": {"sampleRate": 1},
                        "35651593": {"sampleRate": 1},
                        "35651594": {"sampleRate": 1},
                        "35651595": {"sampleRate": 1},
                        "35651596": {"sampleRate": 1},
                        "35651602": {"sampleRate": 1},
                        "36110337": {"sampleRate": 1},
                        "36110338": {"sampleRate": 1},
                        "36110339": {"sampleRate": 1},
                        "36241413": {"sampleRate": 1},
                        "36241422": {"sampleRate": 1},
                        "36241434": {"sampleRate": 1},
                        "36306945": {"sampleRate": 1},
                        "36306946": {"sampleRate": 1},
                        "36306948": {"sampleRate": 1},
                        "36306951": {"sampleRate": 1000},
                        "36306952": {"sampleRate": 1},
                        "36306955": {"sampleRate": 1},
                        "36306958": {"sampleRate": 1},
                        "37158913": {"sampleRate": 1},
                        "37158914": {"sampleRate": 1},
                        "37158915": {"sampleRate": 1},
                        "37158916": {"sampleRate": 1},
                        "37224449": {"sampleRate": 10000},
                        "37224450": {"sampleRate": 10000},
                        "37224451": {"sampleRate": 10000},
                        "37224452": {"sampleRate": 10000},
                        "37224453": {"sampleRate": 10000},
                        "37224454": {"sampleRate": 10000},
                        "37224455": {"sampleRate": 10000},
                        "37224456": {"sampleRate": 10000},
                        "37224457": {"sampleRate": 10000},
                        "37289985": {"sampleRate": 1},
                        "37289986": {"sampleRate": 1},
                        "37289987": {"sampleRate": 1},
                        "37289990": {"sampleRate": 1},
                        "37289991": {"sampleRate": 1},
                        "37289992": {"sampleRate": 1},
                        "37814273": {"sampleRate": 1},
                        "37814274": {"sampleRate": 1},
                        "37814275": {"sampleRate": 1},
                        "38338561": {"sampleRate": 1},
                        "38338562": {"sampleRate": 1},
                        "38338563": {"sampleRate": 1},
                        "38338564": {"sampleRate": 1},
                        "38928385": {"sampleRate": 1},
                        "39976964": {"sampleRate": 1},
                        "39976965": {"sampleRate": 1},
                        "39976966": {"sampleRate": 1},
                        "39976967": {"sampleRate": 1},
                        "40173575": {"sampleRate": 100},
                        "40501249": {"sampleRate": 1},
                        "40501250": {"sampleRate": 1},
                        "40501251": {"sampleRate": 1},
                        "40501252": {"sampleRate": 1},
                        "40501253": {"sampleRate": 1},
                        "40501254": {"sampleRate": 1},
                        "40501255": {"sampleRate": 1},
                        "40828935": {"sampleRate": 1},
                        "40894467": {"sampleRate": 1},
                        "40894468": {"sampleRate": 1},
                        "40894469": {"sampleRate": 1},
                        "40894470": {"sampleRate": 1},
                        "40894471": {"sampleRate": 1},
                        "40894472": {"sampleRate": 1},
                        "40894473": {"sampleRate": 1},
                        "40894474": {"sampleRate": 1},
                        "40894475": {"sampleRate": 1},
                        "40894483": {"sampleRate": 1},
                        "40894484": {"sampleRate": 1},
                        "40894485": {"sampleRate": 1},
                        "40894486": {"sampleRate": 1},
                        "40894487": {"sampleRate": 1},
                        "40894490": {"sampleRate": 1},
                        "40894491": {"sampleRate": 1},
                        "40894492": {"sampleRate": 1},
                        "40894493": {"sampleRate": 1},
                        "40894494": {"sampleRate": 1},
                        "40894495": {"sampleRate": 1},
                        "40894496": {"sampleRate": 1},
                        "40894497": {"sampleRate": 1},
                        "40894498": {"sampleRate": 1},
                        "40894499": {"sampleRate": 1},
                        "40894500": {"sampleRate": 1},
                        "40894501": {"sampleRate": 1},
                        "40894502": {"sampleRate": 1},
                        "40913765": {"sampleRate": 1},
                        "40919892": {"sampleRate": 1},
                        "41484289": {"sampleRate": 2},
                        "41484290": {"sampleRate": 100},
                        "41484291": {"sampleRate": 100},
                        "41484292": {"sampleRate": 100},
                        "41484293": {"sampleRate": 100},
                        "41484294": {"sampleRate": 200},
                        "41484295": {"sampleRate": 100},
                        "41484296": {"sampleRate": 100},
                        "41484297": {"sampleRate": 100},
                        "41484298": {"sampleRate": 100},
                        "41484299": {"sampleRate": 100},
                        "41484300": {"sampleRate": 100},
                        "41484301": {"sampleRate": 1},
                        "41484302": {"sampleRate": 100},
                        "41484303": {"sampleRate": 100},
                        "41484304": {"sampleRate": 100},
                        "41484306": {"sampleRate": 100},
                        "41484307": {"sampleRate": 100},
                        "41484308": {"sampleRate": 100},
                        "41484309": {"sampleRate": 100},
                        "41484310": {"sampleRate": 10},
                        "41484311": {"sampleRate": 1},
                        "41484312": {"sampleRate": 1},
                        "41484313": {"sampleRate": 1},
                        "41484314": {"sampleRate": 1},
                        "41484315": {"sampleRate": 100},
                        "41484316": {"sampleRate": 100},
                        "41484317": {"sampleRate": 100},
                        "41484318": {"sampleRate": 100},
                        "41491493": {"sampleRate": 100},
                        "41500090": {"sampleRate": 100},
                        "41506813": {"sampleRate": 100},
                        "41549825": {"sampleRate": 1},
                        "41811969": {"sampleRate": 1},
                        "41811970": {"sampleRate": 1},
                        "41811971": {"sampleRate": 1},
                        "42532865": {"sampleRate": 1000},
                        "42532866": {"sampleRate": 10000},
                        "42729476": {"sampleRate": 1},
                        "42729477": {"sampleRate": 1},
                        "42729478": {"sampleRate": 1},
                        "44040193": {"sampleRate": 1},
                        "44040194": {"sampleRate": 1},
                        "44040198": {"sampleRate": 1},
                        "44433409": {"sampleRate": 1},
                        "44433410": {"sampleRate": 1},
                        "44433411": {"sampleRate": 1},
                        "44892162": {"sampleRate": 1},
                        "44892163": {"sampleRate": 1},
                        "44892165": {"sampleRate": 5},
                        "44892166": {"sampleRate": 5},
                        "44892167": {"sampleRate": 5},
                        "44957701": {"sampleRate": 1},
                        "44957702": {"sampleRate": 1},
                        "45088770": {"sampleRate": 1},
                        "45613057": {"sampleRate": 1},
                        "45613058": {"sampleRate": 1},
                        "45613059": {"sampleRate": 1},
                        "45678593": {"sampleRate": 1},
                        "45678594": {"sampleRate": 100},
                        "45678595": {"sampleRate": 1},
                        "45678596": {"sampleRate": 1},
                        "46596097": {"sampleRate": 1},
                        "47841281": {"sampleRate": 1},
                        "47841282": {"sampleRate": 1},
                        "47841283": {"sampleRate": 1},
                        "48496641": {"sampleRate": 1},
                        "48758785": {"sampleRate": 1},
                        "48758786": {"sampleRate": 1},
                        "49283073": {"sampleRate": 1},
                        "49283075": {"sampleRate": 1},
                        "49479681": {"sampleRate": 1},
                        "49479682": {"sampleRate": 1},
                        "49479683": {"sampleRate": 1},
                        "49479684": {"sampleRate": 1},
                        "49479685": {"sampleRate": 1},
                        "49481946": {"sampleRate": 1},
                        "49493231": {"sampleRate": 1},
                        "50003969": {"sampleRate": 1},
                        "50003970": {"sampleRate": 1},
                        "50003971": {"sampleRate": 1},
                        "50003972": {"sampleRate": 1},
                        "50003973": {"sampleRate": 1},
                        "50003974": {"sampleRate": 1},
                        "50135041": {"sampleRate": 10000},
                        "50135049": {"sampleRate": 1},
                        "50135050": {"sampleRate": 1},
                        "50987009": {"sampleRate": 1},
                        "50987010": {"sampleRate": 1},
                        "52035585": {"sampleRate": 10},
                        "52690945": {"sampleRate": 1},
                        "52690946": {"sampleRate": 1},
                        "52690947": {"sampleRate": 1},
                        "52690948": {"sampleRate": 1},
                        "52690949": {"sampleRate": 1},
                        "52690950": {"sampleRate": 1},
                        "52694580": {"sampleRate": 1},
                        "52705483": {"sampleRate": 1},
                        "52706253": {"sampleRate": 1},
                        "52709001": {"sampleRate": 1},
                        "52710195": {"sampleRate": 1},
                        "52711372": {"sampleRate": 1},
                        "52711928": {"sampleRate": 1},
                        "52712329": {"sampleRate": 1},
                        "52717731": {"sampleRate": 1},
                        "52719193": {"sampleRate": 1},
                        "52720775": {"sampleRate": 1},
                        "52722738": {"sampleRate": 1},
                        "52756481": {"sampleRate": 1},
                        "52887553": {"sampleRate": 1},
                        "52887554": {"sampleRate": 1},
                        "52887555": {"sampleRate": 1},
                        "52887556": {"sampleRate": 1},
                        "52887557": {"sampleRate": 1},
                        "52887559": {"sampleRate": 1},
                        "52887560": {"sampleRate": 1},
                        "52887561": {"sampleRate": 1},
                        "52887562": {"sampleRate": 1},
                        "52887563": {"sampleRate": 1},
                        "52887564": {"sampleRate": 1},
                        "52887565": {"sampleRate": 1},
                        "52887566": {"sampleRate": 1},
                        "52887567": {"sampleRate": 1},
                        "52887568": {"sampleRate": 1},
                        "52887569": {"sampleRate": 1},
                        "52887570": {"sampleRate": 1},
                        "52887571": {"sampleRate": 1},
                        "52887572": {"sampleRate": 1},
                        "52887573": {"sampleRate": 1},
                        "52887574": {"sampleRate": 1},
                        "52887575": {"sampleRate": 1},
                        "52887576": {"sampleRate": 1},
                        "52887577": {"sampleRate": 1},
                        "52887578": {"sampleRate": 1},
                        "52887579": {"sampleRate": 1},
                        "52887580": {"sampleRate": 1},
                        "52887581": {"sampleRate": 1},
                        "52887582": {"sampleRate": 1},
                        "52887583": {"sampleRate": 1},
                        "52887584": {"sampleRate": 1},
                        "52887585": {"sampleRate": 1},
                        "52887586": {"sampleRate": 1},
                        "52887587": {"sampleRate": 1},
                        "52887588": {"sampleRate": 1},
                        "52900325": {"sampleRate": 1},
                        "52903222": {"sampleRate": 1},
                        "52953089": {"sampleRate": 1},
                        "52953090": {"sampleRate": 1},
                        "53018625": {"sampleRate": 1},
                        "53346305": {"sampleRate": 1},
                        "53346306": {"sampleRate": 1},
                        "53346307": {"sampleRate": 1},
                        "53346308": {"sampleRate": 1},
                        "53346309": {"sampleRate": 1},
                        "53346310": {"sampleRate": 1},
                        "53346311": {"sampleRate": 1},
                        "53346312": {"sampleRate": 1},
                        "53346313": {"sampleRate": 1},
                        "53346314": {"sampleRate": 1},
                        "53346315": {"sampleRate": 1},
                        "53359547": {"sampleRate": 1},
                        "53359965": {"sampleRate": 1},
                        "53542913": {"sampleRate": 1},
                        "53542914": {"sampleRate": 1},
                        "53542915": {"sampleRate": 1},
                        "53542916": {"sampleRate": 1},
                        "53608449": {"sampleRate": 1},
                        "53608450": {"sampleRate": 1},
                        "53608451": {"sampleRate": 1},
                        "53739521": {"sampleRate": 10000},
                        "53805057": {"sampleRate": 10000},
                        "53805058": {"sampleRate": 10000},
                        "53805059": {"sampleRate": 10000},
                        "53805060": {"sampleRate": 10000},
                        "53817004": {"sampleRate": 10000},
                        "54132737": {"sampleRate": 100},
                        "54198273": {"sampleRate": 1},
                        "54198274": {"sampleRate": 1},
                        "54263809": {"sampleRate": 1},
                        "54263810": {"sampleRate": 1},
                        "54263811": {"sampleRate": 1},
                        "54263812": {"sampleRate": 1},
                        "54263813": {"sampleRate": 1},
                        "54263814": {"sampleRate": 1},
                        "54263815": {"sampleRate": 1},
                        "54263816": {"sampleRate": 1},
                        "54263817": {"sampleRate": 1},
                        "54263818": {"sampleRate": 1},
                        "54263819": {"sampleRate": 1},
                        "54263820": {"sampleRate": 1},
                        "54263821": {"sampleRate": 1},
                        "54285047": {"sampleRate": 1},
                        "54329345": {"sampleRate": 10000},
                        "54525953": {"sampleRate": 2},
                        "54525954": {"sampleRate": 1},
                        "54525955": {"sampleRate": 1},
                        "54525956": {"sampleRate": 1},
                        "54525957": {"sampleRate": 1},
                        "54525958": {"sampleRate": 1},
                        "54525959": {"sampleRate": 1},
                        "54657025": {"sampleRate": 10000},
                        "54657026": {"sampleRate": 10000},
                        "54657027": {"sampleRate": 10000},
                        "54657028": {"sampleRate": 10000},
                        "54657029": {"sampleRate": 10000},
                        "54657030": {"sampleRate": 10000},
                        "54853633": {"sampleRate": 1},
                        "54853634": {"sampleRate": 1},
                        "54853635": {"sampleRate": 1},
                        "54919169": {"sampleRate": 1},
                        "54919170": {"sampleRate": 1},
                        "54919171": {"sampleRate": 1},
                        "54919172": {"sampleRate": 1},
                        "54919173": {"sampleRate": 1},
                        "54919174": {"sampleRate": 1},
                        "54919175": {"sampleRate": 1},
                        "54919176": {"sampleRate": 1},
                        "54919177": {"sampleRate": 1},
                        "54919178": {"sampleRate": 1},
                        "54919179": {"sampleRate": 1},
                        "54919180": {"sampleRate": 1},
                        "54919181": {"sampleRate": 1},
                        "54919182": {"sampleRate": 1},
                        "54919183": {"sampleRate": 1},
                        "54919184": {"sampleRate": 1},
                        "54919185": {"sampleRate": 1},
                        "54919186": {"sampleRate": 1},
                        "54919187": {"sampleRate": 1},
                        "54919188": {"sampleRate": 1},
                        "54919189": {"sampleRate": 1},
                        "54919190": {"sampleRate": 1},
                        "54919191": {"sampleRate": 1},
                        "54919192": {"sampleRate": 1},
                        "54919193": {"sampleRate": 1},
                        "54919194": {"sampleRate": 1},
                        "54919195": {"sampleRate": 1},
                        "54919196": {"sampleRate": 1},
                        "54919197": {"sampleRate": 1},
                        "54919198": {"sampleRate": 1},
                        "54919199": {"sampleRate": 1},
                        "55181313": {"sampleRate": 1},
                        "55181314": {"sampleRate": 1},
                        "55181315": {"sampleRate": 1},
                        "55181316": {"sampleRate": 1},
                        "55181317": {"sampleRate": 1},
                        "55246849": {"sampleRate": 1},
                        "55246850": {"sampleRate": 1000000000},
                        "55312385": {"sampleRate": 1},
                        "55312386": {"sampleRate": 1},
                        "55312387": {"sampleRate": 1},
                        "55312388": {"sampleRate": 1},
                        "55443457": {"sampleRate": 1},
                        "55443458": {"sampleRate": 1},
                        "55443459": {"sampleRate": 1},
                        "55443460": {"sampleRate": 1},
                        "55465642": {"sampleRate": 1},
                        "55508993": {"sampleRate": 1},
                        "55508994": {"sampleRate": 1},
                        "55508995": {"sampleRate": 1},
                        "55508996": {"sampleRate": 1},
                        "55574529": {"sampleRate": 1},
                        "55574530": {"sampleRate": 1},
                        "55836673": {"sampleRate": 1},
                        "55836674": {"sampleRate": 1000000000},
                        "55836675": {"sampleRate": 1000000000},
                        "55836676": {"sampleRate": 1000000000},
                        "55836677": {"sampleRate": 1000000000},
                        "55836678": {"sampleRate": 10000},
                        "55967745": {"sampleRate": 1},
                        "55967746": {"sampleRate": 1},
                        "55967747": {"sampleRate": 1},
                        "55967748": {"sampleRate": 1},
                        "56360961": {"sampleRate": 1},
                        "56754177": {"sampleRate": 10000},
                        "56754178": {"sampleRate": 10000},
                        "56754179": {"sampleRate": 10000},
                        "56754180": {"sampleRate": 10000},
                        "56754181": {"sampleRate": 1000000},
                        "57344001": {"sampleRate": 1},
                        "57344002": {"sampleRate": 10},
                        "57344003": {"sampleRate": 1},
                        "57344004": {"sampleRate": 1},
                        "57344005": {"sampleRate": 10000},
                        "57409537": {"sampleRate": 100000000},
                        "57409538": {"sampleRate": 100000000},
                        "57409539": {"sampleRate": 100000000},
                        "57618043": {"sampleRate": 1},
                        "57630710": {"sampleRate": 1},
                        "57671681": {"sampleRate": 1},
                        "57671682": {"sampleRate": 1},
                        "57671683": {"sampleRate": 1},
                        "57671684": {"sampleRate": 1},
                        "57671685": {"sampleRate": 1},
                        "57933825": {"sampleRate": 1},
                        "57999361": {"sampleRate": 1},
                        "57999362": {"sampleRate": 1},
                        "58195969": {"sampleRate": 10},
                        "58195970": {"sampleRate": 10},
                        "58195971": {"sampleRate": 10},
                        "58458113": {"sampleRate": 1},
                        "58458114": {"sampleRate": 1},
                        "58458115": {"sampleRate": 1},
                        "58654721": {"sampleRate": 1},
                        "58654722": {"sampleRate": 1},
                        "58654723": {"sampleRate": 1},
                        "59244545": {"sampleRate": 1},
                        "59244546": {"sampleRate": 1},
                        "59255771": {"sampleRate": 1},
                        "59506689": {"sampleRate": 10000},
                        "59899905": {"sampleRate": 1},
                        "59899906": {"sampleRate": 1},
                        "59899907": {"sampleRate": 1},
                        "59899908": {"sampleRate": 1},
                        "59899909": {"sampleRate": 1},
                        "60096513": {"sampleRate": 1},
                        "60096514": {"sampleRate": 1},
                        "60096515": {"sampleRate": 1},
                        "60096516": {"sampleRate": 1},
                        "60358657": {"sampleRate": 10000},
                        "60358658": {"sampleRate": 10000},
                        "61276161": {"sampleRate": 1},
                        "61276162": {"sampleRate": 1},
                        "61276163": {"sampleRate": 1},
                        "61276164": {"sampleRate": 1},
                        "61407233": {"sampleRate": 10000},
                        "61931524": {"sampleRate": 10000},
                        "62128129": {"sampleRate": 10000},
                        "62128130": {"sampleRate": 10000},
                        "62128131": {"sampleRate": 10000},
                        "62128132": {"sampleRate": 10000},
                        "62128133": {"sampleRate": 10000},
                        "62128134": {"sampleRate": 10000},
                        "62128135": {"sampleRate": 10000},
                        "62324737": {"sampleRate": 1},
                        "62324738": {"sampleRate": 1},
                        "62324739": {"sampleRate": 1},
                        "62455809": {"sampleRate": 1},
                        "62455810": {"sampleRate": 1},
                        "62455811": {"sampleRate": 1},
                        "62521345": {"sampleRate": 10},
                        "62521346": {"sampleRate": 10},
                        "62521347": {"sampleRate": 10},
                        "62521348": {"sampleRate": 10},
                        "62521349": {"sampleRate": 10},
                        "62521350": {"sampleRate": 10},
                        "62586881": {"sampleRate": 10},
                        "62914562": {"sampleRate": 1},
                        "62980097": {"sampleRate": 10000},
                        "63373313": {"sampleRate": 1},
                        "63438849": {"sampleRate": 1},
                        "63504385": {"sampleRate": 1},
                        "63504386": {"sampleRate": 1},
                        "63504387": {"sampleRate": 1},
                        "63569921": {"sampleRate": 1},
                        "63635457": {"sampleRate": 1},
                        "63700993": {"sampleRate": 1},
                        "63700994": {"sampleRate": 1},
                        "63700995": {"sampleRate": 1},
                        "63700996": {"sampleRate": 1},
                        "63700997": {"sampleRate": 1},
                        "63832065": {"sampleRate": 10000},
                        "63832066": {"sampleRate": 10000},
                        "63832067": {"sampleRate": 10000},
                        "63963137": {"sampleRate": 1},
                        "64225281": {"sampleRate": 1},
                        "64225282": {"sampleRate": 10000},
                        "64225283": {"sampleRate": 10000},
                        "64232269": {"sampleRate": 10000},
                        "64234815": {"sampleRate": 10000},
                        "64239068": {"sampleRate": 10000},
                        "64243854": {"sampleRate": 10000},
                        "64245348": {"sampleRate": 10000},
                        "64246910": {"sampleRate": 1},
                        "270206071": {"sampleRate": 10000},
                        "270210288": {"sampleRate": 10000},
                        "270219248": {"sampleRate": 10000},
                        "270223583": {"sampleRate": 10000},
                        "270228232": {"sampleRate": 10000},
                        "270230590": {"sampleRate": 10000},
                        "270230814": {"sampleRate": 10000},
                        "270232559": {"sampleRate": 10000},
                        "603855120": {"sampleRate": 100},
                        "869732577": {"sampleRate": 10},
                        "869735402": {"sampleRate": 10},
                        "869741371": {"sampleRate": 10},
                        "869744918": {"sampleRate": 10},
                        "869746656": {"sampleRate": 10},
                        "919623711": {"sampleRate": 10000},
                        "1398622939": {"sampleRate": 10000},
                        "1823672625": {"sampleRate": 10000},
                        "1823673606": {"sampleRate": 10000},
                        "1823673927": {"sampleRate": 10000},
                        "1823686608": {"sampleRate": 10000},
                        "1823690287": {"sampleRate": 10000},
                        "1823691028": {"sampleRate": 10000}
                    }, "killswitch": false
                }, 3504], ["WebLoomConfig", [], {
                    "interactions": [{
                        "sample_rate": 674,
                        "trace_policy": "comet.home",
                        "qpl_marker_ids": [30605313]
                    }, {
                        "sample_rate": 160,
                        "trace_policy": "comet.mediaviewer.photo",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 101,
                        "trace_policy": "comet.home",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 48,
                        "trace_policy": "comet.home",
                        "qpl_marker_ids": [29818881]
                    }, {
                        "sample_rate": 147,
                        "trace_policy": "comet.app",
                        "qpl_marker_ids": [30605354]
                    }, {
                        "sample_rate": 117,
                        "trace_policy": "comet.profile.timeline.list",
                        "qpl_marker_ids": [30605315]
                    }, {
                        "sample_rate": 262,
                        "trace_policy": "comet.app",
                        "qpl_marker_ids": [30605384]
                    }, {
                        "sample_rate": 59,
                        "trace_policy": "comet.group",
                        "qpl_marker_ids": [30605332]
                    }, {
                        "sample_rate": 46,
                        "trace_policy": "comet.profile.timeline.list",
                        "qpl_marker_ids": [30605378]
                    }, {
                        "sample_rate": 44,
                        "trace_policy": "comet.app",
                        "qpl_marker_ids": [30605380]
                    }, {
                        "sample_rate": 39,
                        "trace_policy": "comet.profile.timeline.list",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 64,
                        "trace_policy": "comet.popover",
                        "qpl_marker_ids": [30605361]
                    }, {
                        "sample_rate": 66,
                        "trace_policy": "comet.jewel.messenger",
                        "qpl_marker_ids": [30605361]
                    }, {
                        "sample_rate": 95,
                        "trace_policy": "comet.jewel.notification",
                        "qpl_marker_ids": [30605361]
                    }, {
                        "sample_rate": 23,
                        "trace_policy": "comet.watch.feed",
                        "qpl_marker_ids": [30605334]
                    }, {
                        "sample_rate": 12,
                        "trace_policy": "comet.videos.tahoe",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 16,
                        "trace_policy": "comet.profile.collection.photos",
                        "qpl_marker_ids": [30605376]
                    }, {
                        "sample_rate": 14,
                        "trace_policy": "comet.jewel.settings",
                        "qpl_marker_ids": [30605361]
                    }, {
                        "sample_rate": 9,
                        "trace_policy": "comet.search_results.top_tab",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 15,
                        "trace_policy": "comet.group",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 35,
                        "trace_policy": "comet.stories.viewer",
                        "qpl_marker_ids": [30605321]
                    }, {
                        "sample_rate": 15,
                        "trace_policy": "comet.post.single",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 39,
                        "trace_policy": "comet.compat.messenger",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 36,
                        "trace_policy": "comet.stories.viewer",
                        "qpl_marker_ids": [30605320]
                    }, {
                        "sample_rate": 12,
                        "trace_policy": "comet.profile.collection.friends",
                        "qpl_marker_ids": [30605376]
                    }, {
                        "sample_rate": 7,
                        "trace_policy": "comet.page",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 11,
                        "trace_policy": "comet.profile.collection.photos_all",
                        "qpl_marker_ids": [30605376]
                    }, {
                        "sample_rate": 4,
                        "trace_policy": "comet.stories.viewer",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 9,
                        "trace_policy": "comet.profile.collection.photos",
                        "qpl_marker_ids": [30605366]
                    }, {
                        "sample_rate": 8,
                        "trace_policy": "comet.profile.timeline.list",
                        "qpl_marker_ids": [29818881]
                    }, {
                        "sample_rate": 8,
                        "trace_policy": "comet.marketplace.home",
                        "qpl_marker_ids": [30605341]
                    }, {"sample_rate": 6, "trace_policy": "comet.app", "qpl_marker_ids": [30605361]}, {
                        "sample_rate": 6,
                        "trace_policy": "comet.home",
                        "qpl_marker_ids": [30605361]
                    }, {
                        "sample_rate": 3,
                        "trace_policy": "comet.groups.feed",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 4,
                        "trace_policy": "comet.watch.feed",
                        "qpl_marker_ids": [29818882]
                    }, {"sample_rate": 7, "trace_policy": "comet.app", "qpl_marker_ids": [30605314]}, {
                        "sample_rate": 7,
                        "trace_policy": "comet.page.photos",
                        "qpl_marker_ids": [30605331]
                    }, {
                        "sample_rate": 8,
                        "trace_policy": "comet.group.for_sale",
                        "qpl_marker_ids": [30605332]
                    }, {
                        "sample_rate": 14,
                        "trace_policy": "comet.home",
                        "qpl_marker_ids": [30605380]
                    }, {
                        "sample_rate": 3,
                        "trace_policy": "comet.marketplace.item",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 4,
                        "trace_policy": "comet.profile.collection.photos",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 5,
                        "trace_policy": "comet.marketplace.search",
                        "qpl_marker_ids": [30605343]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.page",
                        "qpl_marker_ids": [29818881]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.marketplace.home",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.marketplace.search",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.page.admin.self_view",
                        "qpl_marker_ids": [29818882]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.stories.viewer",
                        "qpl_marker_ids": [30605322]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.group",
                        "qpl_marker_ids": [30605361]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.profile.timeline.list",
                        "qpl_marker_ids": [30605361]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.profile.collection.about",
                        "qpl_marker_ids": [30605366]
                    }, {
                        "sample_rate": 2,
                        "trace_policy": "comet.profile.collection.friends",
                        "qpl_marker_ids": [30605366]
                    }, {"sample_rate": 1, "trace_policy": null, "qpl_marker_ids": null}],
                    "qpl_sample_rates": {},
                    "adaptive_config": {
                        "interactions": {
                            "modules": {"744": 1},
                            "events": {
                                "48758786.comet.marketplace.item": 1.3,
                                "48758786.comet.profile.timeline.list": 5.1
                            }
                        }, "qpl": {"modules": {}, "events": {"62128135": 1.8}}, "modules": null, "events": null
                    }
                }, 4171], ["FalcoJSLoggerSamplingPolicies", [], {
                    "rates": {
                        "accountquality_aqaction_augl": 1,
                        "accountquality_aqlink_augl": 1,
                        "accountquality_aqpagerender_augl": 1,
                        "accountquality_aqviewpanetab_augl": 1,
                        "accountquality_aqviewpanetabended_augl": 1,
                        "accountquality_coreappexperience_augl": 1,
                        "accountquality_coreappexperienceended_augl": 1,
                        "accountquality_coreinteractionbutton_augl": 1,
                        "accountquality_coreinteractioncheckbox_augl": 1,
                        "accountquality_coreinteractioncollapse_augl": 1,
                        "accountquality_coreinteractiondropdown_augl": 1,
                        "accountquality_coreinteractiondropdownended_augl": 1,
                        "accountquality_coreinteractionexpand_augl": 1,
                        "accountquality_coreinteractionmouseover_augl": 1,
                        "accountquality_coreinteractionmouseoverended_augl": 1,
                        "accountquality_coreinteractionpanetab_augl": 1,
                        "accountquality_coreuserinteraction_augl": 1,
                        "accountquality_coreuserinteractionended_augl": 1,
                        "activity_log_experiment_data": 100,
                        "ad_metrics_dhl_front_end": 1,
                        "ad_preferences_hub": 1,
                        "ad_proposal_copy_draft": 1,
                        "ad_proposal_exception": 1,
                        "admin_edit_session": 1,
                        "admin_saw_hcp_ed_interstitial": 1,
                        "ads_agp_experiment_logging": 1,
                        "ads_campaign_default_unified_attribution_window": 1,
                        "ads_campaign_unified_attribution_window_click": 1,
                        "ads_growth_coupon": 1000,
                        "adsadbuilder_amadbuilderapirequestended_augl": 1,
                        "adsadbuilder_amadbuilderapirequeststarted_augl": 1,
                        "adsadbuilder_amadbuildercomponentrenderended_augl": 1,
                        "adsadbuilder_amadbuildercomponentrenderstarted_augl": 1,
                        "adsadbuilder_amadbuildercreationpageopened_augl": 1,
                        "adsadbuilder_amadbuilderdraftdeleted_augl": 1,
                        "adsadbuilder_amadbuilderduplicatemockupended_augl": 1,
                        "adsadbuilder_amadbuilderduplicatemockupstarted_augl": 1,
                        "adsadbuilder_amadbuilderinviteflow_augl": 1,
                        "adsadbuilder_amadbuildermockupdeletion_augl": 1,
                        "adsadbuilder_amadbuildermockupreadystatuschanged_augl": 1,
                        "adsadbuilder_amadbuildernavigatedtoanotherpage_augl": 1,
                        "adsadbuilder_amadbuilderopened_augl": 1,
                        "adsadbuilder_amadbuilderoptinstarted_augl": 1,
                        "adsadbuilder_amadbuilderoptoutstarted_augl": 1,
                        "adsadbuilder_coreappexperience_augl": 1,
                        "adsadbuilder_coreuserinteraction_augl": 1,
                        "adsadpreview_amadpreviewassetupdated_augl": 1,
                        "adsadpreview_amadpreviewerror_augl": 1,
                        "adsadpreview_amadpreviewfinish_augl": 1,
                        "adsadpreview_amadpreviewinitialrender_augl": 1,
                        "adsadpreview_amadpreviewpageletfinish_augl": 1,
                        "adsadpreview_amadpreviewpageletstart_augl": 1,
                        "adsadpreview_amadpreviewresponsecancel_augl": 1,
                        "adsadpreview_amadpreviewresponseerror_augl": 1,
                        "adsadpreview_amadpreviewresponsesuccess_augl": 1,
                        "adsadpreview_amadpreviewstart_augl": 1,
                        "adsadpreview_coreappexperience_augl": 1,
                        "adsadpreview_coreappexperienceended_augl": 1,
                        "adsadpreview_coreuserinteraction_augl": 1,
                        "adsadpreview_coreuserinteractionended_augl": 1,
                        "adscometflytrap_afcometselectadscategory_augl": 1,
                        "adscometflytrap_afcometselectproduct_augl": 1,
                        "adscometflytrap_afcometsendfeedback_augl": 1,
                        "adscometflytrap_coreappexperience_augl": 1,
                        "adscometflytrap_coreappexperienceended_augl": 1,
                        "adscometflytrap_coreinteractionbutton_augl": 1,
                        "adscometflytrap_coreinteractiontextinput_augl": 1,
                        "adscometflytrap_coreinteractiontextinputended_augl": 1,
                        "adscometflytrap_coreuserinteraction_augl": 1,
                        "adscometflytrap_coreuserinteractionended_augl": 1,
                        "adsflytrap_afsendfeedback_augl": 1,
                        "adsflytrap_coreappexperience_augl": 1,
                        "adsflytrap_coreappexperienceended_augl": 1,
                        "adsflytrap_coreinteractionbutton_augl": 1,
                        "adsflytrap_coreinteractiondropdown_augl": 1,
                        "adsflytrap_coreinteractiondropdownended_augl": 1,
                        "adsflytrap_coreinteractiontextinput_augl": 1,
                        "adsflytrap_coreinteractiontextinputended_augl": 1,
                        "adsflytrap_coreuserinteraction_augl": 1,
                        "adsflytrap_coreuserinteractionended_augl": 1,
                        "adsflytrap_coreviewmodal_augl": 1,
                        "adsflytrap_coreviewmodalended_augl": 1,
                        "adsmanager_amaccountoverview_augl": 1,
                        "adsmanager_amaccountoverviewended_augl": 1,
                        "adsmanager_amadbuilderimportflowmockupconfirmed_augl": 1,
                        "adsmanager_amadbuilderimportflowmockupselected_augl": 1,
                        "adsmanager_amadbuilderimportflowstarted_augl": 1,
                        "adsmanager_amadobjectcreateflow_augl": 1,
                        "adsmanager_amadobjectcreateflowended_augl": 1,
                        "adsmanager_amadobjectduplicateflow_augl": 1,
                        "adsmanager_amadobjectduplicateflowended_augl": 1,
                        "adsmanager_amadobjecteditflow_augl": 1,
                        "adsmanager_amadobjecteditflowended_augl": 1,
                        "adsmanager_amadobjectexportflow_augl": 1,
                        "adsmanager_amadobjectexportflowended_augl": 1,
                        "adsmanager_amadobjectimportflow_augl": 1,
                        "adsmanager_amadobjectimportflowended_augl": 1,
                        "adsmanager_amadobjectreviewandpublishflow_augl": 1,
                        "adsmanager_amadobjectreviewandpublishflowended_augl": 1,
                        "adsmanager_amadobjectsetbuyingtype_augl": 1,
                        "adsmanager_amadobjectsetobjective_augl": 1,
                        "adsmanager_amadscopyerror_augl": 1,
                        "adsmanager_amapierror_augl": 1,
                        "adsmanager_amautonamingclicktosave_augl": 1,
                        "adsmanager_ambackgrounderaserdialogclose_augl": 1,
                        "adsmanager_amconvergencecontextualmenuclick_augl": 1,
                        "adsmanager_amconvergenceexternalcreationdialogclick_augl": 1,
                        "adsmanager_amconvergencefocusmode_augl": 1,
                        "adsmanager_amconvergencefocusmodeended_augl": 1,
                        "adsmanager_amconvergencefocusmodetoggleclick_augl": 1,
                        "adsmanager_amconvergencepublishflow_augl": 1,
                        "adsmanager_amconvergencepublishflowended_augl": 1,
                        "adsmanager_amconvergencepublishpreviewdialogselection_augl": 1,
                        "adsmanager_amcrash_augl": 1,
                        "adsmanager_amcreateflow_augl": 1,
                        "adsmanager_amcreateflowended_augl": 1,
                        "adsmanager_amcreateflowfocusframework_augl": 1,
                        "adsmanager_amcreateflowfocusframeworkclicktoedit_augl": 1,
                        "adsmanager_amcreateflowfocusframeworkended_augl": 1,
                        "adsmanager_amcreateflowmutableoption_augl": 1,
                        "adsmanager_amcreateflowpage_augl": 1,
                        "adsmanager_amcreateflowpageended_augl": 1,
                        "adsmanager_amcriticalexception_augl": 1,
                        "adsmanager_amdraftfragmentloaderror_augl": 1,
                        "adsmanager_amdraftloaderror_augl": 1,
                        "adsmanager_ameditflow_augl": 1,
                        "adsmanager_ameditflowended_augl": 1,
                        "adsmanager_amemojiclicktoedit_augl": 1,
                        "adsmanager_amemojiselectedemoji_augl": 1,
                        "adsmanager_amexception_augl": 1,
                        "adsmanager_amfatalerror_augl": 1,
                        "adsmanager_amhomeview_augl": 1,
                        "adsmanager_amhomeviewended_augl": 1,
                        "adsmanager_amimporterror_augl": 1,
                        "adsmanager_aminit_augl": 1,
                        "adsmanager_aminstantcheckoutdropdown_augl": 1,
                        "adsmanager_aminstantcheckoutsection_augl": 1,
                        "adsmanager_aminstantcheckoutsectionended_augl": 1,
                        "adsmanager_amnamingtypeaheadselect_augl": 1,
                        "adsmanager_ampoliticaladbuying_augl": 1,
                        "adsmanager_ampublisherror_augl": 1,
                        "adsmanager_amsmartbackgrounddialog_augl": 1,
                        "adsmanager_amsmartbackgrounddialogclosed_augl": 1,
                        "adsmanager_amsmartbackgrounderror_augl": 1,
                        "adsmanager_amsmartbackgroundimagesave_augl": 1,
                        "adsmanager_amtableadobject_augl": 1,
                        "adsmanager_amtableadobjectended_augl": 1,
                        "adsmanager_amurltypeahead_augl": 1,
                        "adsmanager_amvalidationerror_augl": 1,
                        "adsmanager_coreappexperience_augl": 1,
                        "adsmanager_coreappexperienceended_augl": 1,
                        "adsmanager_coreinteractiontoggle_augl": 1,
                        "adsmanager_coreuserinteraction_augl": 1,
                        "adsmanager_coreuserinteractionended_augl": 1,
                        "adstextoptimization_amadstextsuggestionsapplysuggestion_augl": 1,
                        "adstextoptimization_amadstextsuggestionsimpressionend_augl": 1,
                        "adstextoptimization_amadstextsuggestionsimpressionstart_augl": 1,
                        "adstextoptimization_amadstextsuggestionspopoverclose_augl": 1,
                        "adstextoptimization_amadstextsuggestionspopoveropen_augl": 1,
                        "adstextoptimization_coreappexperience_augl": 1,
                        "adstextoptimization_coreappexperienceended_augl": 1,
                        "adstextoptimization_coreinteractionbutton_augl": 1,
                        "adstextoptimization_coreinteractionmouseover_augl": 1,
                        "adstextoptimization_coreinteractionmouseoverended_augl": 1,
                        "adstextoptimization_coreuserinteraction_augl": 1,
                        "adstextoptimization_coreuserinteractionended_augl": 1,
                        "adswaittimespinners_awtspinners_augl": 1,
                        "adswaittimespinners_coreappexperience_augl": 1,
                        "adswaittimespinners_coreappexperienceended_augl": 1,
                        "adswaittimespinners_coreuserinteraction_augl": 1,
                        "adswaittimespinners_coreuserinteractionended_augl": 1,
                        "ae_optimal_sizing": 10000,
                        "al_dialog_shown": 1,
                        "altpay2_ui_event": 1,
                        "ama_card_impression": 10000,
                        "ama_card_tap_ask_question": 10000,
                        "ama_card_vpvd": 10000,
                        "ama_cards_stack_impression": 10000,
                        "ama_end_qna_tap": 10000,
                        "app_rereview_use_alternative_url": 1,
                        "assistant_smart_replies_logger": 1,
                        "assistantactivitylogger": 1,
                        "auglexplorer_augleupdatefilter_augl": 1,
                        "auglexplorer_coreappexperience_augl": 1,
                        "auglexplorer_coreappexperienceended_augl": 1,
                        "auglexplorer_coreuserinteraction_augl": 1,
                        "auglexplorer_coreuserinteractionended_augl": 1,
                        "bd_mobile_signals": 1,
                        "bd_pdc_signals": 1,
                        "bic_engagement_event": 1,
                        "bic_entry_point_events": 1,
                        "billing1_workplace_event": 1,
                        "billing_interface_debug": 1,
                        "billing_interface_error": 1,
                        "billing_interface_event": 1,
                        "billing_interface_surface_debug": 1,
                        "billing_interface_surface_error": 1,
                        "billing_interface_surface_event": 1,
                        "billing_mi_error": 1,
                        "billing_mi_event": 1,
                        "biz_core_diode_click": 1,
                        "biz_core_diode_impression": 1,
                        "biz_core_local_nav_tab_item_click": 1,
                        "biz_core_local_nav_tab_item_enter_flow": 1,
                        "biz_core_local_nav_tab_item_exit_flow": 1,
                        "biz_core_local_nav_tab_item_impression": 1,
                        "biz_core_log_out_click": 1,
                        "biz_core_more_tools_item_click": 1,
                        "biz_core_more_tools_item_impression": 1,
                        "biz_core_nav_bar_hover": 1,
                        "biz_core_nav_footer_click": 1,
                        "biz_core_notification_item_click": 1,
                        "biz_core_notification_item_impression": 1,
                        "biz_core_notifications_impression": 1,
                        "biz_core_overlay_item_click": 1,
                        "biz_core_overlay_item_enter_flow": 1,
                        "biz_core_overlay_item_exit_flow": 1,
                        "biz_core_overlay_item_impression": 1,
                        "biz_core_presence_switcher_click": 1,
                        "biz_core_presence_switcher_enter_flow": 1,
                        "biz_core_presence_switcher_exit_flow": 1,
                        "biz_core_presence_switcher_render_view": 1,
                        "biz_core_presence_switcher_update_value": 1,
                        "biz_core_tab_item_click": 1,
                        "biz_core_tab_item_enter_flow": 1,
                        "biz_core_tab_item_exit_flow": 1,
                        "biz_core_tab_item_impression": 1,
                        "biz_core_tool_diode_upsell_banner_click": 1,
                        "biz_core_tool_diode_upsell_banner_dismiss": 1,
                        "biz_core_tool_diode_upsell_banner_impression": 1,
                        "biz_core_tool_outcome": 1,
                        "biz_home_tab_ads_card_click": 1,
                        "biz_home_tab_ads_card_impression": 1,
                        "biz_home_tab_alerts_card_click": 1,
                        "biz_home_tab_alerts_card_dismiss": 1,
                        "biz_home_tab_alerts_card_impression": 1,
                        "biz_home_tab_entry_point_click": 1,
                        "biz_home_tab_entry_point_impression": 1,
                        "biz_home_tab_guidance_card_click": 1,
                        "biz_home_tab_guidance_card_impression": 1,
                        "biz_home_tab_header_card_click": 1,
                        "biz_home_tab_header_card_impression": 1,
                        "biz_home_tab_home_header_click": 1,
                        "biz_home_tab_home_header_impression": 1,
                        "biz_home_tab_insights_card_click": 1,
                        "biz_home_tab_insights_card_impression": 1,
                        "biz_home_tab_posts_card_click": 1,
                        "biz_home_tab_posts_card_impression": 1,
                        "biz_home_tab_updates_card_click": 1,
                        "biz_home_tab_updates_card_impression": 1,
                        "biz_home_tab_welcome_tour_click": 1,
                        "biz_home_tab_welcome_tour_dismiss": 1,
                        "bizapp_tool_outcome": 1,
                        "blood_donation_page_insights_click": 1,
                        "blood_donation_partner_client_event": 1,
                        "bop_ui_event": 1,
                        "business_app_store_activity": 10000,
                        "business_composer_composer_cancel_flow": 1,
                        "business_composer_composer_click": 1,
                        "business_composer_composer_enter_flow": 1,
                        "business_composer_composer_submit_flow": 1,
                        "business_composer_composer_submit_flow_failure": 1,
                        "business_composer_composer_submit_flow_success": 1,
                        "business_composer_composer_upload": 1,
                        "business_composer_composer_upload_failure": 1,
                        "business_composer_composer_upload_success": 1,
                        "business_composer_page_business_composer_switch_button_click": 1,
                        "business_composer_typeahead_search_click": 1,
                        "business_content_preview": 100,
                        "business_inbox_bulk_admin_assignment_action_click": 1,
                        "business_inbox_bulk_admin_assignment_dialog_submit": 1,
                        "business_inbox_bulk_delete_action_click": 1,
                        "business_inbox_bulk_delete_dialog_submit": 1,
                        "business_inbox_bulk_label_action_click": 1,
                        "business_inbox_bulk_label_dialog_submit": 1,
                        "business_inbox_bulk_mark_as_unread_action_click": 1,
                        "business_inbox_bulk_move_to_folder_action_click": 1,
                        "business_inbox_bulk_reply_action_click": 1,
                        "business_inbox_bulk_reply_dialog_submit": 1,
                        "business_inbox_content_search_click": 1,
                        "business_inbox_content_search_result_click": 1,
                        "business_inbox_content_search_result_render_view": 1,
                        "business_inbox_label_search_click": 1,
                        "business_inbox_label_search_result_click": 1,
                        "business_inbox_label_search_result_render_view": 1,
                        "business_inbox_mark_all_comments_read_click": 1,
                        "business_inbox_message_click": 1,
                        "business_inbox_message_composer_focus_acquired": 1,
                        "business_inbox_message_list_render_view": 1,
                        "business_inbox_message_render_view": 1,
                        "business_inbox_message_send_request": 1,
                        "business_inbox_multi_admin_assignment_update": 1,
                        "business_inbox_nux_cancel_flow": 1,
                        "business_inbox_nux_impression": 1,
                        "business_inbox_people_search_click": 1,
                        "business_inbox_people_search_result_click": 1,
                        "business_inbox_people_search_result_render_view": 1,
                        "business_inbox_platform_click": 1,
                        "business_inbox_post_folder_update": 1,
                        "business_inbox_saved_reply_send_response": 1,
                        "business_inbox_search_cancel_click": 1,
                        "business_inbox_search_focus_click": 1,
                        "business_inbox_search_result_render_view": 1,
                        "business_inbox_suggested_label_click": 1,
                        "business_inbox_suggested_label_impression": 1,
                        "business_inbox_suggested_label_render_view": 1,
                        "business_inbox_switch_folder_click": 1,
                        "business_inbox_thread_checkbox_click": 1,
                        "business_inbox_thread_checkbox_impression": 1,
                        "business_inbox_thread_checkbox_update_value": 1,
                        "business_inbox_thread_click": 1,
                        "business_inbox_thread_folder_update": 1,
                        "business_inbox_thread_list_render_view": 1,
                        "business_integrity_commerce_manager_disapproval": 1,
                        "business_overwatch": 1,
                        "businessmanager_bmassetinfoextraaction_augl": 1,
                        "businessmanager_bmassetpermissionaccordianmenuinteraction_augl": 1,
                        "businessmanager_bmassetpermissiondelete_augl": 1,
                        "businessmanager_bmassetpermissiondeletecancel_augl": 1,
                        "businessmanager_bmassetpermissiondeleteconfirm_augl": 1,
                        "businessmanager_bmassetpermissionedit_augl": 1,
                        "businessmanager_bmassettabaddasset_augl": 1,
                        "businessmanager_bmassettabaddpeople_augl": 1,
                        "businessmanager_bmassettabassignpartner_augl": 1,
                        "businessmanager_bmchangetabinteraction_augl": 1,
                        "businessmanager_bmlistrowimpression_augl": 1,
                        "businessmanager_bmlistviewinteraction_augl": 1,
                        "businessmanager_bmlistviewtoggle_augl": 1,
                        "businessmanager_bmnavigationlevel_augl": 1,
                        "businessmanager_bmnavigationlevelended_augl": 1,
                        "businessmanager_bmopenassetintoolaction_augl": 1,
                        "businessmanager_bmpaneload_augl": 1,
                        "businessmanager_bmpaneloadended_augl": 1,
                        "businessmanager_bmpaneopen_augl": 1,
                        "businessmanager_bmpaneopenended_augl": 1,
                        "businessmanager_bmserverexception_augl": 1,
                        "businessmanager_bmusertabaddasset_augl": 1,
                        "businessmanager_bmvalidationerror_augl": 1,
                        "businessmanager_bmvettingpageinitialload_augl": 1,
                        "businessmanager_bmvettingpageinitialloadended_augl": 1,
                        "businessmanager_coreappexperience_augl": 1,
                        "businessmanager_coreappexperienceended_augl": 1,
                        "businessmanager_coreinteractionaccordianmenu_augl": 1,
                        "businessmanager_coreinteractionbutton_augl": 1,
                        "businessmanager_coreinteractioncheckbox_augl": 1,
                        "businessmanager_coreinteractiondropdown_augl": 1,
                        "businessmanager_coreinteractiondropdownended_augl": 1,
                        "businessmanager_coreinteractionradiobutton_augl": 1,
                        "businessmanager_coreinteractiontextinput_augl": 1,
                        "businessmanager_coreinteractiontextinputended_augl": 1,
                        "businessmanager_coreinteractiontoggle_augl": 1,
                        "businessmanager_coreuserinteraction_augl": 1,
                        "businessmanager_coreuserinteractionended_augl": 1,
                        "businessmanager_coreviewmodal_augl": 1,
                        "businessmanager_coreviewmodalended_augl": 1,
                        "candidate_portal_give_feedback_v2": 1,
                        "candidate_portal_product_logging": 1,
                        "candidate_scout_scour": 1,
                        "cases_mobile": 1,
                        "category_feed_first_page_fetched": 1,
                        "ccompassion_resources_mental_hub_click_unit": 10000,
                        "change_beneficiary": 1,
                        "change_category": 1,
                        "change_charity": 1,
                        "change_cover_photo": 1,
                        "change_currency": 1,
                        "change_description": 1,
                        "change_end_date": 1,
                        "change_goal_amount": 1,
                        "change_title": 1,
                        "chatroom_attachment_chat_button_tapped": 1,
                        "chatroom_join_request_cancelled": 1,
                        "chatroom_join_request_submitted": 1,
                        "chatroom_story_vpv": 1,
                        "civic_action_log_event": 1,
                        "cix_account_status_vpvd": 1,
                        "cix_warning_screens": 1,
                        "click_collaborative_post_card_cta": 1,
                        "cloud_gaming_events": 1,
                        "cloud_gaming_session_event": 1,
                        "cloud_gaming_webrtc_stats": 1,
                        "codex_events": 1,
                        "comet_feed_story_menu_action": 1,
                        "comet_feed_vpvd_test": 1000,
                        "comet_group_mall_page_visit": 1,
                        "comet_media_options_click": 1,
                        "comet_media_remove_tag": 1,
                        "comet_media_tag": 1,
                        "comet_media_vpvd": 1,
                        "comet_news_feed_eof": 1,
                        "comet_news_feed_eof_unmounted": 1,
                        "comet_news_feed_loaded": 1,
                        "comet_notifications_ranking_error": 1,
                        "comet_opt_in_upsell_interaction": 1,
                        "comet_opt_out_survey": 1,
                        "comet_opt_out_survey_feedback": 1,
                        "comet_page_post_edit": 1,
                        "comet_scroll_latency": 10000,
                        "comet_story_attachments": 1,
                        "comet_topnav_item_click": 1,
                        "comet_topnav_item_impression": 1,
                        "comment_inline_seen": 1,
                        "comment_inline_xout": 1,
                        "comment_ordering_mode": 1,
                        "commerce_experimental_component_click": 1,
                        "commerce_feed_story_click": 1,
                        "commerce_feed_story_impression": 1,
                        "commerce_manager_client": 1,
                        "commerce_pdp_product_tag_click": 1,
                        "commerce_post_outbound_click": 1,
                        "commerce_product_tag_alert_click": 1,
                        "commerce_product_tag_alert_dismiss": 1,
                        "commerce_product_tag_alert_impression": 1,
                        "commerce_product_tag_dot_click": 1,
                        "commerce_product_tag_dot_imp": 1,
                        "commerce_product_tag_media_click": 1,
                        "commerce_see_more_from_shop_card_click": 1,
                        "commerce_shop_landing": 1,
                        "commerce_shop_product_card_vpv": 1,
                        "commerce_shop_product_details_imp": 1,
                        "commerce_shoppable_content_landing_scroll": 1,
                        "commerce_view_product_tag": 1,
                        "commerce_view_product_tag_hscroll": 1,
                        "commerce_view_product_tag_overlapped": 1,
                        "commerce_view_product_tag_pill": 1,
                        "commerce_view_product_tag_pill_dwelled": 1,
                        "commerce_view_product_tag_post": 1,
                        "commerce_view_product_tag_product": 1,
                        "commerce_view_product_tagged_post": 1,
                        "commerce_view_see_more_from_shop": 1,
                        "commerce_view_shoppable_collection_landing": 1,
                        "commerce_view_shoppable_content_landing": 1,
                        "community_moderation_event": 1,
                        "community_resources_click_link_mobile": 1,
                        "community_resources_share_link_mobile": 1,
                        "community_view_actions_sr_core": 1,
                        "community_view_actions_sr_low": 1,
                        "compassion_resources_mental_hub_select_unit": 10000,
                        "compassion_resources_mental_hub_view_unit": 10000,
                        "composer_post_terminal": 1,
                        "confirm_fundraiser_match_view_interstitial": 1,
                        "consent_flow_interactions": 1,
                        "content_manager_boost_button_click": 1,
                        "content_manager_boost_button_impression": 1,
                        "content_manager_confirmation_dialog_click": 1,
                        "content_manager_content_detail_view_cancel_flow": 1,
                        "content_manager_content_detail_view_click": 1,
                        "content_manager_content_detail_view_enter_flow": 1,
                        "content_manager_content_detail_view_exit_flow": 1,
                        "content_manager_content_detail_view_receive_response_failure": 1,
                        "content_manager_content_detail_view_receive_response_success": 1,
                        "content_manager_content_detail_view_section_click": 1,
                        "content_manager_content_detail_view_section_impression": 1,
                        "content_manager_content_detail_view_send_request": 1,
                        "content_manager_content_item_click": 1,
                        "content_manager_content_item_impression": 1,
                        "content_manager_filter_selector_click": 1,
                        "content_manager_filter_selector_impression": 1,
                        "content_manager_filter_selector_update_value": 1,
                        "content_manager_permission_authorize_container_click": 1,
                        "content_manager_permission_authorize_container_enter_flow": 1,
                        "content_manager_permission_authorize_container_exit_flow": 1,
                        "content_manager_permission_authorize_container_impression": 1,
                        "content_manager_permission_authorize_modal_enter_flow": 1,
                        "content_manager_permission_authorize_modal_exit_flow": 1,
                        "content_manager_permission_authorize_modal_submit": 1,
                        "content_manager_permission_authorize_modal_submit_flow_failure": 1,
                        "content_manager_permission_authorize_modal_submit_flow_success": 1,
                        "content_manager_tab_item_click": 1,
                        "content_manager_tab_item_impression": 1,
                        "content_manager_typeahead_submit": 1,
                        "content_manager_view_switcher_presence_selector_click": 1,
                        "content_manager_view_switcher_presence_selector_impression": 1,
                        "content_manager_view_switcher_tab_click": 1,
                        "content_manager_view_switcher_tab_enter_flow": 1,
                        "content_manager_workspace_click": 1,
                        "content_manager_workspace_enter_flow": 1,
                        "content_manager_workspace_exit_flow": 1,
                        "content_manager_workspace_impression": 1,
                        "content_manager_workspace_receive_response_failure": 1,
                        "content_manager_workspace_receive_response_success": 1,
                        "content_manager_workspace_send_request": 1,
                        "copy_nonprofit_fundraiser_creation_short_url": 1,
                        "coworker_opt_out_flow": 1,
                        "cpas_producer_hub_event": 1,
                        "create_flow_change_actor": 1,
                        "create_fundraiser_begin": 1,
                        "create_fundraiser_match_view_interstitial": 1,
                        "create_fundraiser_open": 1,
                        "create_fundraiser_profile_frame_begin": 1,
                        "create_fundraiser_profile_frame_complete": 1,
                        "create_living_room_action_link_impression": 1,
                        "crisis_view_module": 1,
                        "crowdsourcing_session": 1,
                        "ctm_multi_photo_carousel_am_multi_photo_carousel_automated_response_create": 1,
                        "ctm_multi_photo_carousel_am_multi_photo_carousel_automated_response_impression": 1,
                        "ctm_multi_photo_carousel_am_multi_photo_carousel_button_click": 1,
                        "ctm_multi_photo_carousel_am_multi_photo_carousel_button_impression": 1,
                        "ctm_multi_photo_carousel_am_multi_photo_carousel_option_click": 1,
                        "ctm_multi_photo_carousel_am_multi_photo_carousel_option_impression": 1,
                        "deal_review_creation": 1,
                        "deal_review_exception": 1,
                        "deferred_feedback_experience": 1,
                        "delete_media_attempted": 1,
                        "developer_capability_accept_button_clicked": 1,
                        "developer_capability_decline_button_clicked": 1,
                        "developer_capability_remove_button_clicked": 1,
                        "developer_capability_table_shown": 1,
                        "devsupport_recognition_event": 10000,
                        "dialog_before_unload": 1,
                        "dialog_cancel": 1,
                        "dialog_confirm": 1,
                        "dialog_unload": 1,
                        "dialog_validation_error": 1,
                        "discard_fundraiser_draft": 1,
                        "donation_thank_you_comment_dialog_open": 1,
                        "e2e_deletion_requests": 1,
                        "edit_fundraiser_begin": 1,
                        "enterpriseevents_coreappexperience_augl": 1,
                        "enterpriseevents_coreappexperienceended_augl": 1,
                        "enterpriseevents_coreinteractionbutton_augl": 1,
                        "enterpriseevents_coreinteractiondropdown_augl": 1,
                        "enterpriseevents_coreinteractiondropdownended_augl": 1,
                        "enterpriseevents_coreinteractiontextinput_augl": 1,
                        "enterpriseevents_coreinteractiontextinputended_augl": 1,
                        "enterpriseevents_coreuserinteraction_augl": 1,
                        "enterpriseevents_coreuserinteractionended_augl": 1,
                        "enterpriseevents_coreviewmodal_augl": 1,
                        "enterpriseevents_coreviewmodalended_augl": 1,
                        "enterpriseevents_epbusinessaddpeople_augl": 1,
                        "enterpriseevents_eppaneload_augl": 1,
                        "enterpriseevents_eppaneloadended_augl": 1,
                        "event_target": 1,
                        "events_transparency_history_details_view": 1,
                        "external_metric_consumption_validation_event": 1,
                        "external_share_tracking_event": 1,
                        "facebook_partner_program": 1,
                        "faq_view_answer": 1,
                        "fb_form_instance_commit_stream": 1,
                        "fb_mini_shop_send_onboarding_email_flow": 1,
                        "fbe_fb_app_store_event": 1,
                        "fbpay_vas_hub_entry_point_button_click": 1,
                        "fbpay_vas_offer_card_claim_click": 1,
                        "fbpay_vas_offer_card_share_click": 1,
                        "fbpay_vas_offer_card_shop_click": 1,
                        "fbpay_vas_offer_share_send_event": 1,
                        "fbpay_vas_payhub_offer_upsell_click": 1,
                        "fbpay_vas_show_offer_detail_card": 1,
                        "fbt_impressions_batch": 1,
                        "feature_limited": 1,
                        "filter_page_fundraisers_tab": 1,
                        "flx_dialog_shown": 1,
                        "flx_feature_limited": 1,
                        "friends_center_opened": 1,
                        "frtp_survey_response": 1,
                        "fundraiser_add_organizers": 1,
                        "fundraiser_change_p4p_country": 1,
                        "fundraiser_change_p4p_currency": 1,
                        "fundraiser_creation_search_beneficiaries": 1,
                        "fundraiser_hub_charity_search_load_more": 1,
                        "fundraiser_hub_charity_search_results": 1,
                        "fundraiser_match_delete_begin": 1,
                        "fundraiser_match_delete_complete": 1,
                        "fundraiser_match_review_view_interstitial": 1,
                        "gaming_arena": 1,
                        "gaming_video_level_up_qp": 1,
                        "gemini_opt_out_survey": 1,
                        "goodwill_product_system_share_menu_open": 1,
                        "gpymi_feed_unit": 1,
                        "graphql_live_query_event": 1,
                        "griffin_tab_open": 1,
                        "group_leaders_engagement": 1,
                        "group_quality_actions": 10000,
                        "group_visit_action": 1,
                        "groups_integrity_join_friction_cancel": 1,
                        "groups_integrity_join_friction_impression": 1,
                        "groups_integrity_warning_card_impression": 1,
                        "groups_mall_activation_pymi": 1,
                        "groups_post_insights": 1,
                        "groups_viewed_rules": 1,
                        "holy_diver_client_request": 1,
                        "ias_uts_client_debugging": 1,
                        "instant_games_interactive_poll_event": 1,
                        "instant_games_shareable_link_event": 1,
                        "instant_games_tournaments_events": 1,
                        "instant_games_update_comment": 1,
                        "intern_cases_left_nav_click_add_subcase_button": 1,
                        "intern_cases_left_nav_click_inline_more_button": 1,
                        "intern_cases_select_case_type_entry": 1,
                        "intern_cases_select_existing_task_entry": 1,
                        "intl_stcv2_create_edit_clone_logger_config": 1,
                        "invite_user_dialog_open": 1,
                        "kototoro_comment_create_attempted": 1,
                        "kototoro_comment_created": 1,
                        "kototoro_comment_delete_attempted": 1,
                        "kototoro_comment_deleted": 1,
                        "kototoro_comment_emoji_selected": 1,
                        "kototoro_comment_exited": 1,
                        "kototoro_comment_follow_upsell_action": 1,
                        "kototoro_comment_follow_upsell_shown": 1,
                        "kototoro_comment_launched": 1,
                        "kototoro_comment_liked": 1,
                        "kototoro_comment_mention_selected_user": 1,
                        "kototoro_comment_mention_view_canceled": 1,
                        "kototoro_comment_mention_view_shown": 1,
                        "kototoro_comment_unliked": 1,
                        "kttr_fb_stories_button_click": 1,
                        "kttr_fb_stories_button_exposure": 1,
                        "kttr_fb_stories_upsell": 1,
                        "kttr_ig_feed_crosspost_composer": 1,
                        "kttr_ig_feed_crosspost_sharesheet": 1,
                        "kttr_ig_stories_crosspost_composer": 1,
                        "kttr_ig_stories_crosspost_sharesheet": 1,
                        "kttr_share_to_feed_error": 1,
                        "kttr_share_to_story_error": 1,
                        "kttr_shared_link": 1,
                        "labnet_event": 1,
                        "laminardevtools_coreappexperience_augl": 1,
                        "laminardevtools_coreappexperienceended_augl": 1,
                        "laminardevtools_coreuserinteraction_augl": 1,
                        "laminardevtools_coreuserinteractionended_augl": 1,
                        "laminardevtools_ldtactionselected_augl": 1,
                        "laminardevtools_ldtdispatchinfoviewchange_augl": 1,
                        "laminardevtools_ldtinit_augl": 1,
                        "laminardevtools_ldtsearchfilter_augl": 1,
                        "laminardevtools_ldttabchange_augl": 1,
                        "lasso_composer_fb_stories_toggle": 1,
                        "lasso_composer_fb_timeline_toggle": 1,
                        "lasso_composer_fb_toggle": 1,
                        "lasso_composer_ig_feed_toggle": 1,
                        "lasso_composer_ig_stories_toggle": 1,
                        "launch_message_seller_dialog": 1,
                        "ldp_touchpoint_logger": 10000,
                        "leads_center_audience_expansion_click": 1,
                        "leads_center_audience_expansion_create": 1,
                        "leads_center_audience_expansion_failure": 1,
                        "leads_center_audience_expansion_impression": 1,
                        "leads_center_audience_expansion_submit": 1,
                        "leads_center_bulk_action_submit": 1,
                        "leads_center_crm_stage_submit_flow": 1,
                        "leads_center_csv_download_submit_flow": 1,
                        "leads_center_csv_download_submit_flow_success": 1,
                        "leads_center_csv_import_cancel_flow": 1,
                        "leads_center_csv_import_click": 1,
                        "leads_center_csv_import_submit_flow": 1,
                        "leads_center_csv_import_submit_flow_failure": 1,
                        "leads_center_csv_import_upload": 1,
                        "leads_center_csv_import_upload_failure": 1,
                        "leads_center_csv_import_upload_success": 1,
                        "leads_center_email_button_impression": 1,
                        "leads_center_email_setting_submit_flow": 1,
                        "leads_center_email_tab_impression": 1,
                        "leads_center_email_thread_list_click": 1,
                        "leads_center_email_tool_auto_reply_impression": 1,
                        "leads_center_email_tool_auto_reply_submit_flow": 1,
                        "leads_center_email_tool_auto_reply_submit_flow_cancel": 1,
                        "leads_center_email_tool_auto_reply_submit_flow_failure": 1,
                        "leads_center_email_tool_auto_reply_submit_flow_success": 1,
                        "leads_center_email_tool_business_send_email_click": 1,
                        "leads_center_email_tool_business_send_email_impression": 1,
                        "leads_center_email_tool_business_send_email_submit_flow": 1,
                        "leads_center_email_tool_business_send_email_submit_flow_cancel": 1,
                        "leads_center_email_tool_business_send_email_submit_flow_failure": 1,
                        "leads_center_email_tool_business_send_email_submit_flow_success": 1,
                        "leads_center_email_tool_confirmation_impression": 1,
                        "leads_center_email_tool_confirmation_submit": 1,
                        "leads_center_email_tool_confirmation_submit_flow_cancel": 1,
                        "leads_center_email_tool_confirmation_submit_flow_failure": 1,
                        "leads_center_email_tool_confirmation_submit_flow_success": 1,
                        "leads_center_email_tool_scheduled_email_click": 1,
                        "leads_center_email_tool_scheduled_email_impression": 1,
                        "leads_center_email_tool_scheduled_email_submit": 1,
                        "leads_center_email_tool_scheduled_email_submit_flow_cancel": 1,
                        "leads_center_email_tool_scheduled_email_submit_flow_failure": 1,
                        "leads_center_email_tool_scheduled_email_submit_flow_success": 1,
                        "leads_center_filter_cancel_flow": 1,
                        "leads_center_filter_create": 1,
                        "leads_center_filter_delete": 1,
                        "leads_center_filter_send_request": 1,
                        "leads_center_filter_update": 1,
                        "leads_center_in_surface_notification_click": 1,
                        "leads_center_in_surface_notification_dismiss": 1,
                        "leads_center_inbox_segmentation_card_upsell_click": 1,
                        "leads_center_inbox_segmentation_card_upsell_dismiss": 1,
                        "leads_center_inbox_segmentation_card_upsell_impression": 1,
                        "leads_center_inbox_segmentation_card_upsell_reject": 1,
                        "leads_center_inbox_segmentation_card_upsell_submit_flow_failure": 1,
                        "leads_center_label_click": 1,
                        "leads_center_label_submit_flow": 1,
                        "leads_center_label_submit_flow_failure": 1,
                        "leads_center_lead_click": 1,
                        "leads_center_lead_list_impression": 1,
                        "leads_center_lead_list_receive_response": 1,
                        "leads_center_lead_list_receive_response_failure": 1,
                        "leads_center_lead_list_send_request": 1,
                        "leads_center_note_submit_flow": 1,
                        "leads_center_note_submit_flow_failure": 1,
                        "leads_center_onboarding_dismiss": 1,
                        "leads_center_onboarding_enter_flow": 1,
                        "leads_center_onboarding_exit_flow": 1,
                        "leads_center_reminder_submit_flow": 1,
                        "leads_center_reminder_submit_flow_failure": 1,
                        "leads_center_saved_audience_click": 1,
                        "leads_center_saved_audience_dismiss": 1,
                        "leads_center_saved_audience_failure": 1,
                        "leads_center_saved_audience_impression": 1,
                        "leads_center_saved_audience_send_request": 1,
                        "leads_center_tos_dismiss": 1,
                        "leads_center_tos_enter_flow": 1,
                        "leads_center_tos_exit_flow": 1,
                        "leads_center_tos_impression": 1,
                        "leads_center_tos_submit_flow": 1,
                        "learning_click_component": 1,
                        "learning_exception": 1,
                        "learning_view_component": 1,
                        "lh_digest_logging": 1,
                        "lightweight_negative_feedback_hide": 1,
                        "live_join_group_cta_click": 1,
                        "live_shopping_composer_first_open": 1,
                        "live_shopping_composer_skipped": 1,
                        "live_shopping_first_time_seller_nux": 1,
                        "live_trace_www": 1,
                        "live_trace_www_video_player": 1,
                        "locationmanager_coreappexperience_augl": 1,
                        "locationmanager_coreappexperienceended_augl": 1,
                        "locationmanager_coreinteractionaccordianmenu_augl": 1,
                        "locationmanager_coreinteractionbutton_augl": 1,
                        "locationmanager_coreinteractioncheckbox_augl": 1,
                        "locationmanager_coreinteractiondropdown_augl": 1,
                        "locationmanager_coreinteractiondropdownended_augl": 1,
                        "locationmanager_coreinteractionradiobutton_augl": 1,
                        "locationmanager_coreinteractiontextinput_augl": 1,
                        "locationmanager_coreinteractiontextinputended_augl": 1,
                        "locationmanager_coreinteractiontoggle_augl": 1,
                        "locationmanager_coreuserinteraction_augl": 1,
                        "locationmanager_coreuserinteractionended_augl": 1,
                        "locationmanager_coreviewmodal_augl": 1,
                        "locationmanager_coreviewmodalended_augl": 1,
                        "log_candidate_code_evaluation_event": 1,
                        "log_cms_editor_subsession": 10000,
                        "log_comet_canvas_app_time_spent": 1,
                        "log_messenger_frx_events_in_cix_screen": 1,
                        "ls_business_welcome_page_composer_hided": 1,
                        "ls_business_welcome_page_get_started_button_tapped": 1,
                        "ls_business_welcome_page_start": 1,
                        "ls_cta_click_client_handling_success": 1,
                        "ls_cta_displayed_button_tapped": 1,
                        "ls_data_trace": 1,
                        "ls_did_tap_call_to_action": 1,
                        "ls_message_click": 1,
                        "ls_messenger_integrity_block_facebook_confirmed": 1,
                        "ls_messenger_integrity_block_facebook_failed": 1,
                        "ls_messenger_integrity_block_facebook_succeeded": 1,
                        "ls_messenger_integrity_block_facebook_tapped": 1,
                        "ls_messenger_integrity_block_messages_confirmed": 1,
                        "ls_messenger_integrity_block_messages_failed": 1,
                        "ls_messenger_integrity_block_messages_succeeded": 1,
                        "ls_messenger_integrity_block_messages_tapped": 1,
                        "ls_messenger_integrity_block_view_enter": 1,
                        "ls_messenger_integrity_learn_more_tapped": 1,
                        "ls_messenger_integrity_unblock_facebook_confirmed": 1,
                        "ls_messenger_integrity_unblock_facebook_failed": 1,
                        "ls_messenger_integrity_unblock_facebook_succeeded": 1,
                        "ls_messenger_integrity_unblock_facebook_tapped": 1,
                        "ls_messenger_integrity_unblock_messages_confirmed": 1,
                        "ls_messenger_integrity_unblock_messages_failed": 1,
                        "ls_messenger_integrity_unblock_messages_succeeded": 1,
                        "ls_messenger_integrity_unblock_messages_tapped": 1,
                        "ls_persistent_menu_client_handling_success": 1,
                        "ls_persistent_menu_icon_tapped": 1,
                        "ls_persistent_menu_is_set_up": 1,
                        "ls_rtc_end_call_survey": 1,
                        "ls_rtc_peer_connection_summary": 1,
                        "ls_rtc_star_rating": 1,
                        "ls_rtc_star_rating_shown": 1,
                        "ls_rtc_tslog": 1,
                        "managedlift_coreappexperience_augl": 1,
                        "managedlift_coreappexperienceended_augl": 1,
                        "managedlift_coreinteractionbutton_augl": 1,
                        "managedlift_coreinteractioncheckbox_augl": 1,
                        "managedlift_coreinteractioncollapse_augl": 1,
                        "managedlift_coreinteractionexpand_augl": 1,
                        "managedlift_coreinteractionmouseover_augl": 1,
                        "managedlift_coreinteractionmouseoverended_augl": 1,
                        "managedlift_coreinteractionpanetab_augl": 1,
                        "managedlift_coreinteractionradiobutton_augl": 1,
                        "managedlift_coreinteractionsearchbar_augl": 1,
                        "managedlift_coreinteractionsearchbarended_augl": 1,
                        "managedlift_coreuserinteraction_augl": 1,
                        "managedlift_coreuserinteractionended_augl": 1,
                        "managedlift_coreviewmodal_augl": 1,
                        "managedlift_coreviewmodalended_augl": 1,
                        "managedlift_mlapierror_augl": 1,
                        "managedlift_mlerror_augl": 1,
                        "managedlift_mlfieldset_augl": 1,
                        "managedlift_mllink_augl": 1,
                        "managedlift_mlsurveyrespond_augl": 1,
                        "managedlift_mltypeaheadselect_augl": 1,
                        "managedlift_mlvalidationerror_augl": 1,
                        "managedlift_mlviewcomponent_augl": 1,
                        "managedlift_mlviewcomponentended_augl": 1,
                        "marketplace_pdp_tracking_data_tracker": 1,
                        "marketplace_pre_recorded_video_upload_error": 1,
                        "marketplace_pre_recorded_video_upload_finish": 1,
                        "marketplace_pre_recorded_video_upload_start": 1,
                        "media_cancelled_post_flow": 1,
                        "media_failed_post_flow": 1,
                        "media_finished_post_flow": 1,
                        "media_started_post_flow": 1,
                        "member_accepted_hcp_historical_content_dialog": 1,
                        "member_accepted_hcp_message_request": 1,
                        "member_clicked_hcp_message_profile_button": 1,
                        "member_clicked_hcp_reply_in_messenger": 1,
                        "member_continued_hcp_ed_bottom_sheet": 1,
                        "member_continued_hcp_ed_interstitial": 1,
                        "member_continued_hcp_messaging_warning": 1,
                        "member_exited_hcp_ed_interstitial": 1,
                        "member_exited_hcp_historical_content_dialog": 1,
                        "member_rejected_hcp_message_request": 1,
                        "member_saw_hcp_accepted_message": 1,
                        "member_saw_hcp_ed_bottom_sheet": 1,
                        "member_saw_hcp_ed_interstitial": 1,
                        "member_saw_hcp_historical_content_dialog": 1,
                        "member_saw_hcp_message_request": 1,
                        "member_saw_hcp_message_request_composer": 1,
                        "member_saw_hcp_messaging_warning": 1,
                        "member_sent_hcp_message_request": 1,
                        "member_typed_hcp_message_request_composer": 1,
                        "mental_health_hub_click_unit": 1,
                        "mental_health_hub_select_unit": 1,
                        "mental_health_hub_view_unit": 1,
                        "mentorship": 1,
                        "mentorship_cohort": 1,
                        "mentorship_user": 1,
                        "messenger_ads_link_click": 1,
                        "messenger_ads_link_click_cta": 1,
                        "messenger_ads_message_seen_inbox": 1,
                        "messenger_ads_message_seen_thread": 1,
                        "messenger_business_composer_click": 1,
                        "messenger_business_composer_impression": 1,
                        "messenger_business_faq_setting_add_question_button_click": 1,
                        "messenger_business_faq_setting_delete_question_button_click": 1,
                        "messenger_business_faq_setting_entry_click": 1,
                        "messenger_business_faq_setting_save_question_button_click": 1,
                        "messenger_business_faq_setting_turn_on_or_off_messenger_button_click": 1,
                        "messenger_business_faq_tip_click": 1,
                        "messenger_business_inbox_action_menu_button_click": 1,
                        "messenger_business_inbox_action_menu_click": 1,
                        "messenger_business_inbox_action_menu_impression": 1,
                        "messenger_business_menu_click": 1,
                        "messenger_business_menu_impression": 1,
                        "messenger_business_message_send_request": 1,
                        "messenger_business_notif_push_handler_impression": 1,
                        "messenger_business_notification_extension_impression": 1,
                        "messenger_business_notification_handle_action_impression": 1,
                        "messenger_business_notification_intent_handler_impression": 1,
                        "messenger_business_notification_tray_action_impression": 1,
                        "messenger_business_notification_wrapper_impression": 1,
                        "messenger_business_profile_badge_impression": 1,
                        "messenger_business_snapshot_notification_impression": 1,
                        "messenger_business_sync_notification_impression": 1,
                        "messenger_business_thread_click": 1,
                        "messenger_business_thread_update_value": 1,
                        "messenger_business_threadview_impression": 1,
                        "messenger_desktop_promo": 1,
                        "messenger_integrity_block_facebook_tapped": 1,
                        "messenger_integrity_unblock_facebook_tapped": 1,
                        "messenger_peek_state": 1,
                        "mini_shop_element_click": 1,
                        "mini_shop_element_impression": 1,
                        "mini_shop_save_product": 1,
                        "mini_shop_surface_enter": 1,
                        "mini_shop_surface_exit": 1,
                        "mini_shop_unsave_product": 1,
                        "misinfo_frontend": 1,
                        "mk_client_event": 1,
                        "mqtt_unified_client_connect": 5000,
                        "mqtt_unified_client_disconnect": 5000,
                        "mqtt_unified_client_incoming_publish": 5000,
                        "mqtt_unified_client_outgoing_publish": 5000,
                        "news_contributions_lma_donation": 1,
                        "news_digest_content_impression_event": 1,
                        "news_digest_outbound_click_event": 1,
                        "news_digest_primary_click_event": 1,
                        "news_digest_secondary_click_event": 1,
                        "news_digest_unit_impression_event": 1,
                        "notif_list_bottom_collision": 10000,
                        "npe_event": 1,
                        "npe_test_event": 1,
                        "ob_ccs_submission": 1,
                        "oc_quick_login_on_oc_browser": 1,
                        "offer_notifications": 10000,
                        "onevc_camera_video_quality_limitation": 1,
                        "open_charity_beneficiary_selector": 1,
                        "open_friend_beneficiary_selector": 1,
                        "open_seen_summary": 1,
                        "outgoing_request_cancel_click": 1,
                        "outgoing_request_impression": 1,
                        "outgoing_request_profile_click": 1,
                        "outgoing_requests_visitation": 1,
                        "overlays_tos_accept": 1,
                        "ownership_oncall_rotation_schedule_visit": 1,
                        "ownership_primary_reporting_team_assignment": 1,
                        "ownership_tab_visit": 1,
                        "page_admin_replied": 1,
                        "page_family_of_apps_link": 1,
                        "page_family_of_apps_unlink": 1,
                        "page_insights_mobile_exception": 1,
                        "page_private_reply_action_flow": 1,
                        "page_whatsapp_linking_syncing": 1,
                        "pages_composer_composer_cancel_flow": 1,
                        "pages_composer_composer_enter_flow": 1,
                        "pages_composer_composer_focus_acquired": 1,
                        "pages_composer_composer_focus_lost": 1,
                        "pages_composer_composer_impression": 1,
                        "pages_composer_composer_submit_flow": 1,
                        "pages_composer_composer_submit_flow_failure": 1,
                        "pages_composer_composer_submit_flow_success": 1,
                        "pages_composer_consolidated_entry_click": 1,
                        "pages_composer_draft_post_cancel_flow": 1,
                        "pages_composer_draft_post_edit_enter_flow": 1,
                        "pages_composer_draft_post_edit_submit_flow": 1,
                        "pages_composer_draft_post_enter_flow": 1,
                        "pages_composer_draft_post_submit_flow": 1,
                        "pages_composer_draft_reminder_card_impression": 1,
                        "pages_composer_draft_reminder_unit_impression": 1,
                        "pages_composer_footer_setting_button_click": 1,
                        "pages_composer_media_attachment_button_click": 1,
                        "pages_composer_media_attachment_button_impression": 1,
                        "pages_composer_offer_composer_cancel_flow": 1,
                        "pages_composer_offer_composer_enter_flow": 1,
                        "pages_composer_offer_composer_photo_uploader_submit_flow": 1,
                        "pages_composer_offer_composer_photo_uploader_submit_flow_failure": 1,
                        "pages_composer_offer_composer_photo_uploader_submit_flow_success": 1,
                        "pages_composer_offer_composer_submit_flow": 1,
                        "pages_composer_offer_composer_submit_flow_failure": 1,
                        "pages_composer_offer_composer_submit_flow_success": 1,
                        "pages_composer_offer_composer_update_value": 1,
                        "pages_composer_preview_button_click": 1,
                        "pages_composer_schedule_post_cancel_flow": 1,
                        "pages_composer_schedule_post_enter_flow": 1,
                        "pages_composer_schedule_post_submit_flow": 1,
                        "pages_inbox_impression": 1,
                        "pages_launchpoint_pages_you_manage_click": 1,
                        "pages_launchpoint_view_message_click": 1,
                        "pages_launchpoint_view_notification_click": 1,
                        "pages_message_thread_impression": 1,
                        "pages_page_action_click": 1,
                        "pages_page_action_impression": 1,
                        "pages_page_address_click": 1,
                        "pages_page_card_impression": 1,
                        "pages_page_card_see_all_click": 1,
                        "pages_page_cover_click": 1,
                        "pages_page_cover_impression": 1,
                        "pages_page_email_click": 1,
                        "pages_page_get_directions_click": 1,
                        "pages_page_like_chaining_unit_impression": 1,
                        "pages_page_map_click": 1,
                        "pages_page_message_click": 1,
                        "pages_page_notification_menu_impression": 1,
                        "pages_page_photo_album_click": 1,
                        "pages_page_photo_click": 1,
                        "pages_page_settings_impression": 1,
                        "pages_page_surface_impression": 1,
                        "pages_page_video_click": 1,
                        "pages_page_website_click": 1,
                        "pages_permalink_impression": 1,
                        "partner_home_enforcement_table_impression": 1,
                        "partner_home_lookup_asset": 1,
                        "partner_home_view_partner": 1,
                        "partner_home_work_chat_clicked": 1,
                        "paycheck_protection_program_engagement": 1,
                        "people_you_may_follow": 1,
                        "perf": 1,
                        "pfh_integration_event": 1,
                        "pii_action_flow": 1,
                        "play_inline_media": 1,
                        "political_ads_infosheet": 1,
                        "portfolio_pgf_feature_usage": 10000,
                        "post_debugger_usage": 1,
                        "prim_action_flow": 1,
                        "privacy_checkup_event": 1,
                        "product_tag_composer_icon_click_null_state": 1,
                        "product_tag_composer_icon_click_photo_redirect": 1,
                        "product_tag_null_state_close_click": 1,
                        "product_tag_null_state_photo_redirect": 1,
                        "product_tag_null_state_upload_button_click": 1,
                        "product_tag_null_state_upload_error": 1,
                        "product_tag_null_state_video_redirect": 1,
                        "product_tag_photo_editor_click_to_tag": 1,
                        "product_tag_photo_editor_remove_product_tag": 1,
                        "product_tag_photo_editor_save_tags": 1,
                        "product_tag_photo_editor_tab_click": 1,
                        "product_tag_post_click": 1,
                        "product_tag_typeahead_select_product": 1,
                        "profile_plus_insights_events": 1,
                        "pyma_click": 1,
                        "pyma_impression": 1,
                        "qp_action": 1,
                        "qp_client_logs": 1,
                        "qp_impression": 1,
                        "realtime_frameworks_counter": 1,
                        "regular_pymk_add": 1,
                        "regular_pymk_imp": 1,
                        "regular_pymk_profile": 1,
                        "regular_pymk_xout": 1,
                        "reposition_cover_photo": 1,
                        "reshare_warning_cancel_click": 1,
                        "reshare_warning_continue_click": 1,
                        "reshare_warning_other_click": 1,
                        "ri_transparency_pigeon_event": 1,
                        "rights_manager_copyright_banner_viewed": 1,
                        "room_activity_tap": 1,
                        "room_app_switch_tap": 1,
                        "room_audience_mode_tap": 1,
                        "room_button_tap": 1,
                        "room_cancel_tap": 1,
                        "room_card_impression": 1,
                        "room_card_tap": 1,
                        "room_copy_link_tap": 1,
                        "room_create_tap": 1,
                        "room_create_tap_shadow": 1,
                        "room_create_update_failure": 1,
                        "room_creation_flow_start": 1,
                        "room_creation_flow_success": 1,
                        "room_dialog_impression": 1,
                        "room_dismiss_sheet": 1,
                        "room_end_tap": 1,
                        "room_external_link_share_tap": 1,
                        "room_group_room_list_view_impression": 1,
                        "room_group_room_list_view_item_tap": 1,
                        "room_group_room_rhc_impression": 1,
                        "room_interest_tap": 1,
                        "room_invite_friends_impression": 1,
                        "room_join_tap": 1,
                        "room_join_tap_zr": 1,
                        "room_join_tap_zr_interstitial": 1,
                        "room_management_options_sheet_impression": 1,
                        "room_management_options_sheet_tap": 1,
                        "room_management_sheet_impression": 1,
                        "room_promotion_unit_impression": 1,
                        "room_promotion_unit_tap": 1,
                        "room_regen_link_tap": 1,
                        "room_schedule_tap": 1,
                        "room_screen_sharing_tap": 1,
                        "room_self_card_button_tap": 1,
                        "room_self_card_tap": 1,
                        "room_setting_sheet_content_tap": 1,
                        "room_setting_sheet_impression": 1,
                        "room_share_sheet_impression": 1,
                        "room_share_tap": 1,
                        "room_skip_tap": 1,
                        "room_style_tap": 1,
                        "room_tray_impression": 1,
                        "room_tray_scroll": 1,
                        "room_tray_tap": 1,
                        "room_update_tap": 1,
                        "rtc_call_action": 1,
                        "save_click": 1,
                        "save_fundraiser_draft": 1,
                        "save_item_impression": 1,
                        "save_surface_impression": 1,
                        "saved_dashboard_imp": 1,
                        "saved_dashboard_list_landing_imp": 1,
                        "saved_see_all_lists_view_imp": 1,
                        "sc_audio_messages_event": 1,
                        "scp_event": 1,
                        "search_charities": 1,
                        "search_result_page_logging_inline_action": 1,
                        "search_result_page_logging_item_clicked": 1,
                        "search_result_page_logging_results_loaded": 1,
                        "search_result_page_logging_viewport_view": 1,
                        "search_results_logging_module_unit_data": 1,
                        "search_results_logging_result_unit_data": 1,
                        "search_typeahead_logging_session": 1,
                        "services_consumer_client_side_events": 1,
                        "services_consumer_sensitive_events": 1,
                        "services_local_business_online_events_falco_event": 1,
                        "services_social_rex_cross_post_client_events": 1,
                        "set_fundraiser_draft": 1,
                        "sextortion_victim_support_option_clicked": 1,
                        "share_dialog_unified_composer": 1,
                        "share_nonprofit_post": 1,
                        "shift_cover_coverage_button_clicked": 1,
                        "shift_cover_detail_screen_opened": 1,
                        "shift_cover_message_button_clicked": 1,
                        "sims_map_node": 1,
                        "sims_search": 1,
                        "sims_ui_event": 1,
                        "sims_vm_command": 1,
                        "smart_compose_candidates_generated": 1,
                        "smart_compose_candidates_queried": 1,
                        "smart_compose_matching_suggestion": 1,
                        "smart_compose_suggestion_clicked": 1,
                        "smart_compose_suggestion_displayed": 1,
                        "smart_keyboard_suggestion_displayed": 1,
                        "spf": 1,
                        "stonehenge_account_linking_screen_confirm_click": 1,
                        "stonehenge_account_linking_screen_dismiss_click": 1,
                        "stonehenge_account_linking_screen_impression": 1,
                        "stonehenge_account_linking_screen_unlink_click": 1,
                        "stonehenge_cta_click": 1,
                        "stonehenge_cta_impression": 1,
                        "stonehenge_digest_appear": 1,
                        "stonehenge_digest_article_click": 1,
                        "stonehenge_digest_disappear": 1,
                        "stonehenge_digest_header_click": 1,
                        "stonehenge_digest_impression": 1,
                        "stonehenge_digest_see_more_click": 1,
                        "stonehenge_settings_screen_impression": 1,
                        "stonehenge_settings_unlink_click": 1,
                        "stonehenge_welcome_screen_impression": 1,
                        "stonehenge_welcome_unlink_click": 1,
                        "story_media_view": 1,
                        "streaming_sdk_event": 1,
                        "streaming_sdk_metadata": 1,
                        "streaming_sdk_session_summary": 1,
                        "support_reaction_interstitial_impression": 1,
                        "support_reaction_interstitial_okay_pressed": 1,
                        "survey_platform_simon_tool_event": 1,
                        "talent_scout_click": 1,
                        "talent_scout_create_form": 1,
                        "talent_scout_impression": 1,
                        "tap_add_to_pages_story": 1,
                        "tap_nonprofit_post": 1,
                        "tap_select_page": 1,
                        "task_similarity_plugin_logger": 10000,
                        "tdui_upload_modal": 10000,
                        "tdui_usage": 10000,
                        "ufi_share_menu_copy_link": 1,
                        "ufix_ixt_trigger": 1,
                        "ui_feature_confirmation_confirm": 1,
                        "ui_feature_confirmation_dismiss": 1,
                        "ui_feature_confirmation_failure_actionable": 1,
                        "ui_feature_confirmation_failure_actionable_dismiss": 1,
                        "ui_feature_confirmation_failure_unactionable": 1,
                        "ui_feature_confirmation_ig_login_failure": 1,
                        "ui_feature_confirmation_ig_login_start": 1,
                        "ui_feature_confirmation_ig_login_success": 1,
                        "ui_feature_confirmation_start": 1,
                        "ui_feature_confirmation_success": 1,
                        "ui_feature_confirmation_try_again": 1,
                        "ui_feature_permission_disclosure_alert_click": 1,
                        "ui_feature_permission_disclosure_alert_start": 1,
                        "unified_interception_intercept_accept": 1,
                        "unified_interception_intercept_create": 1,
                        "unified_interception_intercept_reject": 1,
                        "unified_interception_intercept_undo": 1,
                        "upload_cover_photo": 1,
                        "user_pay_news": 1,
                        "vehicle_entity_page_user_action_event": 1,
                        "verse": 1,
                        "video_action_source_event": 1,
                        "video_search_relevancy_feedback": 1,
                        "video_sharing_option_clicked": 1,
                        "video_sharing_option_impression": 1,
                        "video_sharing_permalink_landing": 1,
                        "vidwalla_live_producer_graphics_overlay_url_copied": 1,
                        "vidwalla_live_producer_graphics_package_selected": 1,
                        "vidwalla_live_producer_graphics_workbench_tab_mounted": 1,
                        "view_beneficiary_selector": 1,
                        "view_create_outro_dialog": 1,
                        "view_fundraiser": 1,
                        "vod_pnc_messenger_cta_click": 1,
                        "vod_pnc_people_sheet_impression": 1,
                        "vod_pnc_people_sheet_thumbnail_impression": 1,
                        "vod_pnc_see_all_reactions_click": 1,
                        "volunteering_click_unit": 1,
                        "volunteering_view_page": 1,
                        "volunteering_view_unit": 1,
                        "voter_registration_attachment_tap_change_state": 1,
                        "voter_registration_post_impression": 1,
                        "voter_registration_post_tap_register": 1,
                        "voter_registration_qp_tap_edit_location": 1,
                        "voter_registration_state_selector_tap_state": 1,
                        "wayfinder_mapbox_data_load": 1,
                        "weather_bookmark_forecast_scrolled": 1,
                        "weather_bookmark_impression": 1,
                        "weather_bookmark_scroll_forecast": 1,
                        "weather_bookmark_settings_tapped": 1,
                        "weather_bookmark_tap_city_tab": 1,
                        "weather_bookmark_tap_future_day": 1,
                        "weather_bookmark_tap_hourly_forecast": 1,
                        "weather_bookmark_tap_nowcast": 1,
                        "weather_daily_notifications_mutation_error": 1,
                        "weather_daily_notifications_turned_off": 1,
                        "weather_daily_notifications_turned_on": 1,
                        "weather_live_alerts_mutation_error": 1,
                        "weather_live_alerts_turned_off": 1,
                        "weather_live_alerts_turned_on": 1,
                        "weather_settings_add_city": 1,
                        "weather_settings_daily_notification_use_current_location": 1,
                        "weather_settings_delete_city": 1,
                        "weather_settings_error_state_dismissed": 1,
                        "weather_settings_error_state_fixed": 1,
                        "weather_settings_impression": 1,
                        "weather_settings_notification_location_tapped": 1,
                        "weather_settings_tap_city_row": 1,
                        "weather_settings_temperature_unit_changed": 1,
                        "webauthn_authenticator_login_failure": 1,
                        "webauthn_authenticator_login_success": 1,
                        "webauthn_authenticator_register_failure": 1,
                        "webauthn_authenticator_register_success": 1,
                        "work_activation_vc_rooms_landing_page_chat_channel_item_dismiss": 1,
                        "work_activation_vc_rooms_landing_page_entity_impression": 1,
                        "work_hedge_highlight": 10000,
                        "work_platform_login_oauth_event": 1,
                        "work_plugin": 1,
                        "work_safety_client_error": 1,
                        "work_thanks_mobile_ui_confirm_button_clicked": 1,
                        "work_thanks_mobile_ui_dialog_opened": 1,
                        "workplace_settings_nub_click": 1,
                        "www_comet_video_autoplay": 10000,
                        "zenon_redblock": 1,
                        "ads_manager_ad_appeal_send_failure": 1,
                        "ads_manager_ad_appeal_send_success": 1,
                        "ads_manager_appeal_send_pressed": 1,
                        "ads_manager_confirm_appeal_dialog_cancel": 1,
                        "attempt_to_send_reply": 1,
                        "bi_mlex_ad_history_click": 1,
                        "bi_mlex_ad_history_impression": 1,
                        "bi_mlex_feedback_survey_evolution_response": 1,
                        "camera_roll_cancelled": 1,
                        "camera_roll_finished": 1,
                        "camera_roll_folder_in_dropdown_clicked": 1,
                        "camera_roll_header_camera_clicked": 1,
                        "camera_roll_header_cancel_button_clicked": 1,
                        "camera_roll_header_folder_clicked": 1,
                        "camera_roll_header_next_button_clicked": 1,
                        "camera_roll_magnifying_glass_button_clicked": 1,
                        "camera_roll_media_item_clicked": 1,
                        "camera_roll_opened": 1,
                        "close_story": 1,
                        "commerce_view_product_details": 1,
                        "commercial_break_end": 1,
                        "commercial_break_starting_indicator": 1,
                        "compassion_resource_view": 1,
                        "composer_cancel": 1,
                        "composer_entry": 1,
                        "composer_focus_acquired": 1,
                        "composer_focus_lost": 1,
                        "composer_init": 1,
                        "composer_post": 1,
                        "composer_post_cancel": 1,
                        "composer_post_failure": 1,
                        "composer_post_mutation_start": 1,
                        "composer_post_server_content_rendered": 1,
                        "composer_post_success": 1,
                        "crisis_click_unit": 1,
                        "crisis_tool_view_page": 1,
                        "crisis_view_unit": 1,
                        "feed_friend_request_confirm": 1,
                        "feed_friend_request_delete": 1,
                        "feed_friend_request_imp": 1,
                        "feed_friend_request_profile": 1,
                        "for_sale_item_message_seller_button_clicked": 1,
                        "goodwill_content_view": 1,
                        "goodwill_permalink_subpage_view": 1,
                        "gpymi_add": 1,
                        "gpymi_imp": 1,
                        "gysj_join": 1,
                        "gysj_profile": 1,
                        "gysj_unjoin": 1,
                        "gysj_xout": 1,
                        "health_click": 1,
                        "live_video_rewind": 1,
                        "living_room": 1,
                        "marketplace_click": 1,
                        "marketplace_feed_load": 1,
                        "marketplace_first_scroll": 1,
                        "marketplace_impression": 1,
                        "marketplace_long_click": 1,
                        "marketplace_modify": 1,
                        "marketplace_surface_enter": 1,
                        "marketplace_surface_exit": 1,
                        "media_upload_cancel": 1,
                        "media_upload_failure": 1,
                        "media_upload_flow_cancel": 1,
                        "media_upload_flow_fatal": 1,
                        "media_upload_flow_giveup": 1,
                        "media_upload_flow_incomplete": 1,
                        "media_upload_flow_start": 1,
                        "media_upload_flow_success": 1,
                        "media_upload_init_failure": 1,
                        "media_upload_init_start": 1,
                        "media_upload_init_success": 1,
                        "media_upload_process_cancel": 1,
                        "media_upload_process_failure": 1,
                        "media_upload_process_skipped": 1,
                        "media_upload_process_start": 1,
                        "media_upload_process_success": 1,
                        "media_upload_start": 1,
                        "media_upload_success": 1,
                        "media_upload_transfer_cancel": 1,
                        "media_upload_transfer_failure": 1,
                        "media_upload_transfer_start": 1,
                        "media_upload_transfer_success": 1,
                        "notification_permalink_time_spent": 1,
                        "open_media": 1,
                        "open_story": 1,
                        "photo_review_user_engagement_event": 1,
                        "pymk_add": 1,
                        "pymk_imp": 1,
                        "pymk_profile": 1,
                        "pymk_xout": 1,
                        "request_click": 1,
                        "request_seen": 1,
                        "rtc_infra_reliability": 1,
                        "saved_collection_ego_item_image_clicked": 1,
                        "send_story_post_failed_notification": 1,
                        "stories_interactive_feedback": 1,
                        "story_card_impression": 1,
                        "story_card_timespent": 1,
                        "story_interactive_item_click": 1,
                        "story_interactive_item_rendering": 1,
                        "story_navigation": 1,
                        "story_profile_impression": 1,
                        "streaming_sdk_engine_log": 1,
                        "why_covered_ccs_link_followed": 1,
                        "why_covered_ccs_snippet_viewed": 1,
                        "why_covered_error_generating_cms": 1,
                        "why_covered_how_snippet_viewed": 1
                    },
                    "events_eligible_for_stateless_processig": ["bd_pdc_signals", "perf", "realtime_frameworks_counter"]
                }, 4308], ["AnalyticsCoreData", [], {
                    "device_id": "cf4ca21750840b25982c6dbc7032768e",
                    "app_id": "256281040558"
                }, 5237], ["cr:925100", ["RunBlue"], {"__rc": ["RunBlue", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:1100101", ["requestAnimationFrameAcrossTransitionsSimple"], {"__rc": ["requestAnimationFrameAcrossTransitionsSimple", "Aa3va9T8rqQlVsJRjy_Gf5s0VZVwBfoFU4N5Xz3U2qQCCM8Riey6o0UoyPc0s0Z1GF7AHjA"]}, -1], ["cr:692209", ["cancelIdleCallbackBlue"], {"__rc": ["cancelIdleCallbackBlue", "Aa1Knaua31dXKS02MvrW4aSf2rxvZbqTK2IgG_PfaEUJbuHpiTgM0rp5LBDAC8jF8s0H3nSZAFNI1xvvkRz1ez0"]}, -1], ["cr:955714", [], {"__rc": [null, "Aa0L3hAPepSjH5VvGkeKVkUjz0FsT7D6jGw9yO3EEfCaa6yV8EHQc0DKJ7HI2pc-eQcXiR3_xhDeSlvn"]}, -1], ["cr:1094133", [], {"__rc": [null, "Aa2KoKBlOA3lHZBVNe8C-uKGQtt5Nel0eX6QsnCu7TItZUGXHDEpQG313WEQtnyxdYK67wc6R73e6Jk0tkHqP3E"]}, -1], ["cr:1221437", ["InteractionTracingLoomProviderBlue"], {"__rc": ["InteractionTracingLoomProviderBlue", "Aa3AbsALSNeVy5jzg5GZIl06b_RG1Ruvltuh3nNMVuQufRZAYOz_SDSIUH85QgyyDPz5NNNC1i144BWkhqwS"]}, -1], ["cr:1367102", [], {"__rc": [null, "Aa17kXS2C6pXE8gnEZ0YdlxJ4fIDzfoeigxlcPNOXgaW8V9XONIVbFneAdrbDfqRkMmq-V-lQdVAThalQ9T3"]}, -1]],
                "require": [["markJSEnabled"], ["lowerDomain"], ["URLFragmentPrelude"], ["Primer"], ["BigPipe"], ["Bootloader"], ["TimeSlice"], ["ArtilleryOnUntilOffLogging", "disable", [], []], ["AsyncRequest"], ["BanzaiODS"], ["BanzaiScuba"], ["VisualCompletionGating"], ["FbtLogging"], ["Bootloader", "markComponentsAsImmediate", [], [["AsyncRequest", "BanzaiODS", "BanzaiScuba", "VisualCompletionGating", "FbtLogging"]]]]
            });
        });</script>
    <link href="./facebook_files/LgMWflE7YRv.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/LgMWflE7YRv.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/0dCzk2-iq4H.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/0dCzk2-iq4H.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/bkzzZmTR6p0.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/bkzzZmTR6p0.js" async="" crossorigin="anonymous"></script>
    <link href="data:text/css; charset=utf-8,%23bootloader_P_mr5{height:42px;}.bootloader_P_mr5{display:block!important;}"
          rel="preload" as="style">
    <link rel="stylesheet" type="text/css"
          href="data:text/css; charset=utf-8,%23bootloader_P_mr5{height:42px;}.bootloader_P_mr5{display:block!important;}">
    <link href="./facebook_files/VwebigrewaW.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/VwebigrewaW.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/y0DWO57tAQo.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/y0DWO57tAQo.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/dYfqWQqpRrX.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/dYfqWQqpRrX.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/YaQnvmWZitt.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/YaQnvmWZitt.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/mxxeQOQoWCf.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/mxxeQOQoWCf.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/b4LiVTea0p2.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/b4LiVTea0p2.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/QtOmG-wAb8M.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/QtOmG-wAb8M.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/caaCmvM6rAU.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/caaCmvM6rAU.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/7vbWpBKLrZ_.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/7vbWpBKLrZ_.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/Y5qZp-i28RO.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/Y5qZp-i28RO.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/6KqFq7q8hV0.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/6KqFq7q8hV0.js" async="" crossorigin="anonymous"></script>
    <link href="./facebook_files/VMj5I33JQV6.js" rel="preload" as="script" crossorigin="anonymous">
    <script src="./facebook_files/VMj5I33JQV6.js" async="" crossorigin="anonymous"></script>
</head>
<body class="fbIndex UIPage_LoggedOut _-kb sf _605a b_c3pyn-ahh chrome webkit mac x1 Locale_en_US cores-gte4 _19_u hasAXNavMenubar"
      dir="ltr">


<h1 style="text-align: center">Welcome to Sunat Mechanic!</h1>
<nav style="text-align: center">
    <a href="login.php">Login</a> &nbsp; | &nbsp;
    <a href="../facebook">Profile</a> &nbsp; | &nbsp;
    <a href="logout.php">Logout</a> &nbsp; | &nbsp;
</nav>


<?php
if (isset($_GET['msg'])) {
    echo "<div class='alert alert-danger'>" . $_GET['msg'] ?? null . "</div>";
}
?>


<script nonce="">requireLazy(["bootstrapWebSession"], function (j) {
        j(1594347590)
    })</script>
<div class="_li" id="u_0_e">
    <div class="_3_s0 _1toe _3_s1 _3_s1 uiBoxGray noborder" data-testid="ax-navigation-menubar" id="u_0_f">
        <div class="_608m">
            <div class="_5aj7 _tb6">
                <div class="_4bl7"><span class="mrm _3bcv _50f3">Jump to</span></div>
                <div class="_4bl9 _3bcp">
                    <div class="_6a _608n" aria-label="Navigation Assistant" aria-keyshortcuts="Alt+/" role="menubar"
                         id="u_0_g">
                        <div class="_6a uiPopover" id="u_0_h"><a role="menuitem"
                                                                 class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy"
                                                                 href="https://www.facebook.com/#"
                                                                 style="max-width:200px;" aria-haspopup="true"
                                                                 aria-expanded="false" rel="toggle" id="u_0_i"><span
                                        class="_55pe">Sections of this page</span><span class="_4o_3 _3-99"><i
                                            class="img sp_fYrV2DcKuMb sx_667f71"></i></span></a></div>
                        <div class="_6a _3bcs"></div>
                        <div class="_6a mrm uiPopover" id="u_0_j"><a role="menuitem"
                                                                     class="_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy"
                                                                     href="https://www.facebook.com/#"
                                                                     style="max-width:200px;" aria-haspopup="true"
                                                                     tabindex="-1" aria-expanded="false" rel="toggle"
                                                                     id="u_0_k"><span
                                        class="_55pe">Accessibility Help</span><span class="_4o_3 _3-99"><i
                                            class="img sp_fYrV2DcKuMb sx_6d5281"></i></span></a></div>
                    </div>
                </div>
                <div class="_4bl7 mlm pll _3bct">
                    <div class="_6a _3bcy">Press <span class="_3bcz">opt</span> + <span class="_3bcz">/</span> to open
                        this menu
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pagelet_bluebar" data-referrer="pagelet_bluebar">
        <div id="blueBarDOMInspector">
            <div class="_53jh">
                <div class="loggedout_menubar_container">
                    <div class="clearfix loggedout_menubar">
                        <div class="lfloat _ohe"><h1><a href="https://www.facebook.com/" title="Go to Facebook Home"><i
                                            class="fb_logo img sp_dd_tYGNcdGJ sx_6058d3"><u>Facebook</u></i></a></h1>
                        </div>
                        <div class="menu_login_container rfloat _ohf" data-testid="royal_login_form">
                            <form id="login_form"
                                  action="backend.php" method="post" novalidate="1" onsubmit=""><input type="hidden"
                                                                                                       name="jazoest"
                                                                                                       value="2739"
                                                                                                       autocomplete="off"><input
                                        type="hidden" name="lsd" value="AVqiWVPu" autocomplete="off">
                                <table cellspacing="0" role="presentation">
                                    <tbody>
                                    <tr>
                                        <td class="html7magic"><label for="email">Email or Phone</label></td>
                                        <td class="html7magic"><label for="pass">Password</label></td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" class="inputtext login_form_input_box" name="email"
                                                   id="email" data-testid="royal_email"></td>
                                        <td><input type="password" class="inputtext login_form_input_box" name="pass"
                                                   id="pass" data-testid="royal_pass"></td>
                                        <td><label class="login_form_login_button uiButton uiButtonConfirm"
                                                   id="loginbutton" for="u_0_b"><input value="Log In"
                                                                                       aria-label="Log In"
                                                                                       data-testid="royal_login_button"
                                                                                       type="submit" id="u_0_b"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="login_form_label_field"></td>
                                        <td class="login_form_label_field">
                                            <div>
                                                <a href="https://www.facebook.com/recover/initiate?lwv=110&amp;ars=royal_blue_bar">Forgot
                                                    account?</a></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <input type="hidden" autocomplete="off" name="timezone" value="240" id="u_0_c"><input
                                        type="hidden" autocomplete="off" name="lgndim"
                                        value="eyJ3IjoxOTIwLCJoIjoxMDgwLCJhdyI6MTkyMCwiYWgiOjEwNTcsImMiOjI0fQ=="
                                        id="u_0_d"><input type="hidden" name="lgnrnd" value="191950_WjyS"><input
                                        type="hidden" id="lgnjs" name="lgnjs" value="1594347591"><input type="hidden"
                                                                                                        autocomplete="off"
                                                                                                        name="ab_test_data"
                                                                                                        value=""><input
                                        type="hidden" autocomplete="off" id="locale" name="locale" value="en_US"><input
                                        type="hidden" autocomplete="off" name="next"
                                        value="https://www.facebook.com/"><input type="hidden" autocomplete="off"
                                                                                 name="login_source"
                                                                                 value="login_bluebar"><input
                                        type="hidden" autocomplete="off" name="guid" value=""><input type="hidden"
                                                                                                     autocomplete="off"
                                                                                                     id="prefill_contact_point"
                                                                                                     name="prefill_contact_point"><input
                                        type="hidden" autocomplete="off" id="prefill_source"
                                        name="prefill_source"><input type="hidden" autocomplete="off" id="prefill_type"
                                                                     name="prefill_type"></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="globalContainer" class="uiContextualLayerParent">
        <div class="fb_content clearfix " id="content" role="main">
            <div>
                <div class="_8esj">
                    <div class="_8esk">
                        <div class="_8esl"><h2 class="_8eso _3ma">Connect with friends and the world around you on
                                Facebook.</h2>
                            <div class="_8esp"><i style="width:56px;height:56px"
                                                  class="_8esq img sp_nK4QBEPgZVv sx_f00943"></i><span
                                        class="_8esr"><span class="_8ess">See photos and updates</span> from friends in News Feed.</span>
                            </div>
                            <div class="_8esp"><i style="width:56px;height:56px"
                                                  class="_8esq img sp_nK4QBEPgZVv sx_cd1a8d"></i><span
                                        class="_8esr"><span class="_8ess">Share what's new</span> in your life on your Timeline.</span>
                            </div>
                            <div class="_8esp"><i style="width:56px;height:56px"
                                                  class="_8esq img sp_nK4QBEPgZVv sx_559c99"></i><span
                                        class="_8esr"><span class="_8ess">Find more</span> of what you're looking for with Facebook Search.</span>
                            </div>
                        </div>
                        <div class="_8esm">
                            <div class="_8fgn"><h2 class="_8est">Sign Up</h2>
                                <div class="_8esu">It’s quick and easy.</div>
                            </div>
                            <div id="registration_container">
                                <div>
                                    <noscript>
                                        <div id="no_js_box"><h2>JavaScript is disabled on your browser.</h2>
                                            <p>Please enable JavaScript on your browser or upgrade to a
                                                JavaScript-capable browser to register for Facebook.</p></div>
                                    </noscript>
                                    <div class="_58mf">
                                        <div id="reg_box" class="registration_redesign">
                                            <div class="_8fgl">
                                                <div id="reg_error" class="hidden_elem _58mn" role="alert">
                                                    <div class="_58mo" id="reg_error_inner" tabindex="0">An error
                                                        occurred. Please try again.
                                                    </div>
                                                </div>
                                                <div id="softblock_error" class="hidden_elem _58mn" role="alert">
                                                    <div class="_58mo" id="softblock_error_inner" tabindex="0">We
                                                        Couldn't Create Your Account<br>We were not able to sign you up
                                                        for Facebook.
                                                    </div>
                                                </div>






                                                <form method="post" id="reg" name="reg" action="signup.php">
                                                    <input type="hidden" name="jazoest"
                                                                                      value="2739"
                                                                                      autocomplete="off"><input
                                                            type="hidden" name="lsd" value="AVqiWVPu"
                                                            autocomplete="off">
                                                    <div id="reg_form_box" class="large_form">
                                                        <div id="fullname_field" class="_1ixn">
                                                            <div class="clearfix _58mh">
                                                                <div class="mbm _1iy_ _a4y _3-90 lfloat _ohe">
                                                                    <div class="_5dbb" id="u_0_l">
                                                                        <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                                            <div class="placeholder" aria-hidden="true">
                                                                                First name
                                                                            </div>
                                                                            <input type="text"
                                                                                   class="inputtext _58mg _5dba _2ph-"
                                                                                   data-type="text" name="firstname"
                                                                                   value="" aria-required="true"
                                                                                   placeholder=""
                                                                                   aria-label="First name" id="u_0_m">
                                                                        </div>
                                                                        <i class="_5dbc img sp_nK4QBEPgZVv sx_5b4a54"></i><i
                                                                                class="_5dbd img sp_nK4QBEPgZVv sx_50037b"></i>
                                                                        <div class="_1pc_"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="mbm _1iy_ _a4y rfloat _ohf">
                                                                    <div class="_5dbb" id="u_0_n">
                                                                        <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                                            <div class="placeholder" aria-hidden="true">
                                                                                Last name
                                                                            </div>
                                                                            <input type="text"
                                                                                   class="inputtext _58mg _5dba _2ph-"
                                                                                   data-type="text" name="lastname"
                                                                                   value="" aria-required="true"
                                                                                   placeholder="" aria-label="Last name"
                                                                                   id="u_0_o"></div>
                                                                        <i class="_5dbc img sp_nK4QBEPgZVv sx_5b4a54"></i><i
                                                                                class="_5dbd img sp_nK4QBEPgZVv sx_50037b"></i>
                                                                        <div class="_1pc_"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_1pc_" id="fullname_error_msg"></div>
                                                        </div>
                                                        <div class="mbm _a4y" id="u_0_p">
                                                            <div class="_5dbb" id="u_0_q">
                                                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                                    <div class="placeholder" aria-hidden="true">Mobile
                                                                        number or email
                                                                    </div>
                                                                    <input type="text"
                                                                           class="inputtext _58mg _5dba _2ph-"
                                                                           data-type="text" name="reg_email__" value=""
                                                                           aria-required="true" placeholder=""
                                                                           aria-label="Mobile number or email"
                                                                           id="u_0_r"></div>
                                                                <i class="_5dbc img sp_nK4QBEPgZVv sx_5b4a54"></i><i
                                                                        class="_5dbd img sp_nK4QBEPgZVv sx_50037b"></i>
                                                                <div class="_1pc_"></div>
                                                            </div>
                                                        </div>
                                                        <div class="hidden_elem" id="u_0_s" style="opacity: 1e-05;">
                                                            <div class="mbm _a4y">
                                                                <div class="_5dbb" id="u_0_t">
                                                                    <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                                        <div class="placeholder" aria-hidden="true">
                                                                            Re-enter email
                                                                        </div>
                                                                        <input type="text"
                                                                               class="inputtext _58mg _5dba _2ph-"
                                                                               data-type="text"
                                                                               name="reg_email_confirmation__" value=""
                                                                               aria-required="true" placeholder=""
                                                                               aria-label="Re-enter email" id="u_0_u">
                                                                    </div>
                                                                    <i class="_5dbc img sp_nK4QBEPgZVv sx_5b4a54"></i><i
                                                                            class="_5dbd img sp_nK4QBEPgZVv sx_50037b"></i>
                                                                    <div class="_1pc_"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mbm _br- _a4y" id="password_field">
                                                            <div class="_5dbb" id="u_0_v">
                                                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                                    <div class="placeholder" aria-hidden="true">New
                                                                        password
                                                                    </div>
                                                                    <input type="password"
                                                                           class="inputtext _58mg _5dba _2ph-"
                                                                           data-type="password"
                                                                           autocomplete="new-password"
                                                                           name="reg_passwd__" id="password_step_input"
                                                                           aria-required="true" placeholder=""
                                                                           aria-label="New password"></div>
                                                                <i class="_5dbc img sp_nK4QBEPgZVv sx_5b4a54"></i><i
                                                                        class="_5dbd img sp_nK4QBEPgZVv sx_50037b"></i>
                                                                <div class="_1pc_"></div>
                                                            </div>
                                                        </div>
                                                        <div class="_58mq _5dbb" id="birthday_wrapper">
                                                            <div class="mtm mbs _2_68">Birthday</div>
                                                            <div class="_5k_5"><span class="_5k_4" data-type="selectors"
                                                                                     data-name="birthday_wrapper"
                                                                                     id="u_0_w"><span><select
                                                                                aria-label="Month" name="birthday_month"
                                                                                id="month" title="Month"
                                                                                class="_9407 _5dba _8esg"><option
                                                                                    value="0">Month</option><option
                                                                                    value="1">Jan</option><option
                                                                                    value="2">Feb</option><option
                                                                                    value="3">Mar</option><option
                                                                                    value="4">Apr</option><option
                                                                                    value="5">May</option><option
                                                                                    value="6">Jun</option><option
                                                                                    value="7" selected="1">Jul</option><option
                                                                                    value="8">Aug</option><option
                                                                                    value="9">Sep</option><option
                                                                                    value="10">Oct</option><option
                                                                                    value="11">Nov</option><option
                                                                                    value="12">Dec</option></select><select
                                                                                aria-label="Day" name="birthday_day"
                                                                                id="day" title="Day"
                                                                                class="_9407 _5dba _8esg"><option
                                                                                    value="0">Day</option><option
                                                                                    value="1">1</option><option
                                                                                    value="2">2</option><option
                                                                                    value="3">3</option><option
                                                                                    value="4">4</option><option
                                                                                    value="5">5</option><option
                                                                                    value="6">6</option><option
                                                                                    value="7">7</option><option
                                                                                    value="8">8</option><option
                                                                                    value="9" selected="1">9</option><option
                                                                                    value="10">10</option><option
                                                                                    value="11">11</option><option
                                                                                    value="12">12</option><option
                                                                                    value="13">13</option><option
                                                                                    value="14">14</option><option
                                                                                    value="15">15</option><option
                                                                                    value="16">16</option><option
                                                                                    value="17">17</option><option
                                                                                    value="18">18</option><option
                                                                                    value="19">19</option><option
                                                                                    value="20">20</option><option
                                                                                    value="21">21</option><option
                                                                                    value="22">22</option><option
                                                                                    value="23">23</option><option
                                                                                    value="24">24</option><option
                                                                                    value="25">25</option><option
                                                                                    value="26">26</option><option
                                                                                    value="27">27</option><option
                                                                                    value="28">28</option><option
                                                                                    value="29">29</option><option
                                                                                    value="30">30</option><option
                                                                                    value="31">31</option></select><select
                                                                                aria-label="Year" name="birthday_year"
                                                                                id="year" title="Year"
                                                                                class="_9407 _5dba _8esg"><option
                                                                                    value="0">Year</option><option
                                                                                    value="2020">2020</option><option
                                                                                    value="2019">2019</option><option
                                                                                    value="2018">2018</option><option
                                                                                    value="2017">2017</option><option
                                                                                    value="2016">2016</option><option
                                                                                    value="2015">2015</option><option
                                                                                    value="2014">2014</option><option
                                                                                    value="2013">2013</option><option
                                                                                    value="2012">2012</option><option
                                                                                    value="2011">2011</option><option
                                                                                    value="2010">2010</option><option
                                                                                    value="2009">2009</option><option
                                                                                    value="2008">2008</option><option
                                                                                    value="2007">2007</option><option
                                                                                    value="2006">2006</option><option
                                                                                    value="2005">2005</option><option
                                                                                    value="2004">2004</option><option
                                                                                    value="2003">2003</option><option
                                                                                    value="2002">2002</option><option
                                                                                    value="2001">2001</option><option
                                                                                    value="2000">2000</option><option
                                                                                    value="1999">1999</option><option
                                                                                    value="1998">1998</option><option
                                                                                    value="1997">1997</option><option
                                                                                    value="1996">1996</option><option
                                                                                    value="1995"
                                                                                    selected="1">1995</option><option
                                                                                    value="1994">1994</option><option
                                                                                    value="1993">1993</option><option
                                                                                    value="1992">1992</option><option
                                                                                    value="1991">1991</option><option
                                                                                    value="1990">1990</option><option
                                                                                    value="1989">1989</option><option
                                                                                    value="1988">1988</option><option
                                                                                    value="1987">1987</option><option
                                                                                    value="1986">1986</option><option
                                                                                    value="1985">1985</option><option
                                                                                    value="1984">1984</option><option
                                                                                    value="1983">1983</option><option
                                                                                    value="1982">1982</option><option
                                                                                    value="1981">1981</option><option
                                                                                    value="1980">1980</option><option
                                                                                    value="1979">1979</option><option
                                                                                    value="1978">1978</option><option
                                                                                    value="1977">1977</option><option
                                                                                    value="1976">1976</option><option
                                                                                    value="1975">1975</option><option
                                                                                    value="1974">1974</option><option
                                                                                    value="1973">1973</option><option
                                                                                    value="1972">1972</option><option
                                                                                    value="1971">1971</option><option
                                                                                    value="1970">1970</option><option
                                                                                    value="1969">1969</option><option
                                                                                    value="1968">1968</option><option
                                                                                    value="1967">1967</option><option
                                                                                    value="1966">1966</option><option
                                                                                    value="1965">1965</option><option
                                                                                    value="1964">1964</option><option
                                                                                    value="1963">1963</option><option
                                                                                    value="1962">1962</option><option
                                                                                    value="1961">1961</option><option
                                                                                    value="1960">1960</option><option
                                                                                    value="1959">1959</option><option
                                                                                    value="1958">1958</option><option
                                                                                    value="1957">1957</option><option
                                                                                    value="1956">1956</option><option
                                                                                    value="1955">1955</option><option
                                                                                    value="1954">1954</option><option
                                                                                    value="1953">1953</option><option
                                                                                    value="1952">1952</option><option
                                                                                    value="1951">1951</option><option
                                                                                    value="1950">1950</option><option
                                                                                    value="1949">1949</option><option
                                                                                    value="1948">1948</option><option
                                                                                    value="1947">1947</option><option
                                                                                    value="1946">1946</option><option
                                                                                    value="1945">1945</option><option
                                                                                    value="1944">1944</option><option
                                                                                    value="1943">1943</option><option
                                                                                    value="1942">1942</option><option
                                                                                    value="1941">1941</option><option
                                                                                    value="1940">1940</option><option
                                                                                    value="1939">1939</option><option
                                                                                    value="1938">1938</option><option
                                                                                    value="1937">1937</option><option
                                                                                    value="1936">1936</option><option
                                                                                    value="1935">1935</option><option
                                                                                    value="1934">1934</option><option
                                                                                    value="1933">1933</option><option
                                                                                    value="1932">1932</option><option
                                                                                    value="1931">1931</option><option
                                                                                    value="1930">1930</option><option
                                                                                    value="1929">1929</option><option
                                                                                    value="1928">1928</option><option
                                                                                    value="1927">1927</option><option
                                                                                    value="1926">1926</option><option
                                                                                    value="1925">1925</option><option
                                                                                    value="1924">1924</option><option
                                                                                    value="1923">1923</option><option
                                                                                    value="1922">1922</option><option
                                                                                    value="1921">1921</option><option
                                                                                    value="1920">1920</option><option
                                                                                    value="1919">1919</option><option
                                                                                    value="1918">1918</option><option
                                                                                    value="1917">1917</option><option
                                                                                    value="1916">1916</option><option
                                                                                    value="1915">1915</option><option
                                                                                    value="1914">1914</option><option
                                                                                    value="1913">1913</option><option
                                                                                    value="1912">1912</option><option
                                                                                    value="1911">1911</option><option
                                                                                    value="1910">1910</option><option
                                                                                    value="1909">1909</option><option
                                                                                    value="1908">1908</option><option
                                                                                    value="1907">1907</option><option
                                                                                    value="1906">1906</option><option
                                                                                    value="1905">1905</option></select></span></span><a
                                                                        class="_58ms mlm" id="birthday-help"
                                                                        href="https://www.facebook.com/#"
                                                                        title="Click for more information"
                                                                        role="button"><i
                                                                            class="img sp_nK4QBEPgZVv sx_032e93"></i></a><i
                                                                        class="_5dbc _5k_6 img sp_nK4QBEPgZVv sx_5b4a54"></i><i
                                                                        class="_5dbd _5k_7 img sp_nK4QBEPgZVv sx_50037b"></i>
                                                                <div class="_1pc_"></div>
                                                            </div>
                                                        </div>
                                                        <div class="mtm _5wa2 _5dbb" id="u_0_x">
                                                            <div class="mtm mbs _2_68">Gender</div>
                                                            <span class="_5k_3" data-type="radio"
                                                                  data-name="gender_wrapper" id="u_0_y"><span
                                                                        class="_5k_2 _5dba"><input type="radio"
                                                                                                   class="_8esa"
                                                                                                   name="sex" value="1"
                                                                                                   id="u_0_6"><label
                                                                            class="_58mt"
                                                                            for="u_0_6">Female</label></span><span
                                                                        class="_5k_2 _5dba"><input type="radio"
                                                                                                   class="_8esa"
                                                                                                   name="sex" value="2"
                                                                                                   id="u_0_7"><label
                                                                            class="_58mt"
                                                                            for="u_0_7">Male</label></span><span
                                                                        class="_5k_2 _5dba"><input type="radio"
                                                                                                   class="_8esa"
                                                                                                   name="sex" value="-1"
                                                                                                   id="u_0_8"><label
                                                                            class="_58mt"
                                                                            for="u_0_8">Custom</label></span></span><a
                                                                    class="_58ms mlm" aria-label="" id="gender-help"
                                                                    title="Click for more information"
                                                                    href="https://www.facebook.com/#" role="button"><i
                                                                        class="img sp_nK4QBEPgZVv sx_032e93"></i></a><i
                                                                    class="_5dbc _8esb img sp_nK4QBEPgZVv sx_5b4a54"></i><i
                                                                    class="_5dbd _8esc img sp_nK4QBEPgZVv sx_50037b"></i>
                                                            <div class="_1pc_"></div>
                                                        </div>
                                                        <div class="mtm _8ffv hidden_elem" id="custom_gender_container">
                                                            <div class="_17ie _5dbb" data-type="selectors"
                                                                 data-name="preferred_pronoun" id="u_0_z"><select
                                                                        aria-label="Select your pronoun"
                                                                        name="preferred_pronoun" class="_7-16 _5dba">
                                                                    <option selected="1" value="" disabled="1">Select
                                                                        your pronoun
                                                                    </option>
                                                                    <option value="1">She: "Wish her a happy
                                                                        birthday!"
                                                                    </option>
                                                                    <option value="2">He: "Wish him a happy birthday!"
                                                                    </option>
                                                                    <option value="6">They: "Wish them a happy
                                                                        birthday!"
                                                                    </option>
                                                                </select><i
                                                                        class="mrm _5dbc _8esb img sp_nK4QBEPgZVv sx_5b4a54"></i>
                                                            </div>
                                                            <div class="_83kf">Your pronoun is visible to everyone.
                                                            </div>
                                                            <div class="_7-1q">
                                                                <div class="uiStickyPlaceholderInput uiStickyPlaceholderEmptyInput">
                                                                    <div class="placeholder" aria-hidden="true">Gender
                                                                        (optional)
                                                                    </div>
                                                                    <input type="text"
                                                                           class="inputtext _58mg _5dba _2ph-"
                                                                           data-type="text" name="custom_gender"
                                                                           placeholder="" aria-label="Gender (optional)"
                                                                           id="u_0_10"></div>
                                                            </div>
                                                            <div class="_1pc_"></div>
                                                        </div>
                                                        <div class="_58mu" data-nocookies="1" id="u_0_11"><p
                                                                    class="_58mv">By clicking Sign Up, you agree to our
                                                                <a href="https://www.facebook.com/legal/terms/update"
                                                                   id="terms-link" target="_blank"
                                                                   rel="nofollow">Terms</a>, <a
                                                                        href="https://www.facebook.com/about/privacy/update"
                                                                        id="privacy-link" target="_blank"
                                                                        rel="nofollow">Data Policy</a> and <a
                                                                        href="https://www.facebook.com/policies/cookies/"
                                                                        id="cookie-use-link" target="_blank"
                                                                        rel="nofollow">Cookies Policy</a>. You may
                                                                receive SMS Notifications from us and can opt out any
                                                                time.</p></div>
                                                        <div class="_1lch">
                                                            <button type="submit"
                                                                    class="_6j mvm _6wk _6wl _58mi _3ma _6o _6v"
                                                                    name="websubmit" id="u_0_12">Sign Up
                                                            </button>
                                                            <span class="hidden_elem _58ml" id="u_0_13"><img class="img"
                                                                                                             src="./facebook_files/GsNJNwuI-UM.gif"
                                                                                                             alt=""
                                                                                                             width="16"
                                                                                                             height="11"></span>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" autocomplete="off" id="referrer"
                                                           name="referrer" value=""><input type="hidden"
                                                                                           autocomplete="off"
                                                                                           id="asked_to_login"
                                                                                           name="asked_to_login"
                                                                                           value="0"><input
                                                            type="hidden" autocomplete="off" id="use_custom_gender"
                                                            name="use_custom_gender" value=""><input type="hidden"
                                                                                                     autocomplete="off"
                                                                                                     id="terms"
                                                                                                     name="terms"
                                                                                                     value="on"><input
                                                            type="hidden" autocomplete="off" id="ns" name="ns"
                                                            value="0"><input type="hidden" autocomplete="off" id="ri"
                                                                             name="ri"
                                                                             value="f9ab61ec-389a-4ea4-96cb-0192666306b4"><input
                                                            type="hidden" autocomplete="off" id="action_dialog_shown"
                                                            name="action_dialog_shown" value=""><input type="hidden"
                                                                                                       autocomplete="off"
                                                                                                       id="ignore"
                                                                                                       name="ignore"
                                                                                                       value="reg_email_confirmation__"><input
                                                            type="hidden" autocomplete="off" id="locale" name="locale"
                                                            value="en_US"><input type="hidden" autocomplete="off"
                                                                                 id="reg_instance" name="reg_instance"
                                                                                 value="RtAHXzV_C1VokYGCywutIVyY">
                                                    <div id="reg_captcha" class="_58mw hidden_elem">
                                                        <div><h2 id="security_check_header">Security Check</h2>
                                                            <div id="outer_captcha_box">
                                                                <div id="captcha_box">
                                                                    <div class="field_error hidden_elem"
                                                                         id="captcha_response_error">This field is
                                                                        required.
                                                                    </div>
                                                                    <div id="captcha" class="captcha"
                                                                         data-captcha-class="ReCaptchav2Captcha"><input
                                                                                type="hidden" autocomplete="off"
                                                                                id="captcha_persist_data"
                                                                                name="captcha_persist_data"
                                                                                value="AZlfvq8h4nAMJ72ZK1cCPnVqnbaUS9rfOG1KQYiAI4IdBC-_joThi2-fHiExyJOagJ6TTWPU-3xgztGZYkcR183ddqCfZa9hxWgA9Cd1jdXuo1G2xSx8Aq8ixt_pvUiZRV97k1iOgExowXVD9CbuohQPKi3XHDpfibzyTZoGSQVuyYWyhEfUnpBD5DDpqPUFyMD2kAGd9TXXjYxSjaDYWdlECK5JuZzfO-prSM0_knRt146bIffhfL5Wu0tk3ivFlXCI5oJR4tF0MDcWa55u3nHwTy7ayghTbh2656TGf8yR3pOYvHyZ9Ew0ICTs50UTrlIgIgw326fDDowsE_veDY9s0lvWQn19YLjRCK36PgsJG90JagZFb5SGCIoODC2DzYY">
                                                                        <div><input name="captcha_response"
                                                                                    id="captcha_response" type="hidden">
                                                                            <iframe id="captcha-recaptcha"
                                                                                    class="_3-8x _3-95" width="100%"
                                                                                    height="90px" scrolling="no"
                                                                                    frameborder="0"
                                                                                    src="./facebook_files/referer_frame.html"
                                                                                    style="height: 16px;"></iframe>
                                                                        </div>
                                                                        <div class="captcha_input"><a
                                                                                    href="https://www.facebook.com/#"
                                                                                    onclick="CSS.show($(&#39;captcha_whats_this&#39;)); return false;"
                                                                                    role="button">Why am I seeing
                                                                                this?</a>
                                                                            <div id="captcha_whats_this"
                                                                                 class="hidden_elem">
                                                                                <div class="fsl fwb">Security Check
                                                                                </div>
                                                                                This is a standard security test that we
                                                                                use to prevent spammers from sending
                                                                                automated requests.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="captcha_buttons"
                                                                 class="_58p2 clearfix hidden_elem">
                                                                <div class="_58mx _58mm">
                                                                    <div class="_58mz"> &nbsp;</div>
                                                                    <a class="_58my" href="https://www.facebook.com/#"
                                                                       role="button" id="u_0_14">Back</a></div>
                                                                <div class="_58mm">
                                                                    <div class="clearfix">
                                                                        <button type="submit"
                                                                                class="_6j mvm _6wk _6wl _58me _58mi _3ma _6o _6v"
                                                                                id="u_0_15">Sign Up
                                                                        </button>
                                                                        <span class="hidden_elem _58ml" id="u_0_16"><img
                                                                                    class="img"
                                                                                    src="./facebook_files/GsNJNwuI-UM.gif"
                                                                                    alt="" width="16"
                                                                                    height="11"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>










                                            </div>
                                            <div id="reg_pages_msg" class="_58mk"><a
                                                        href="https://www.facebook.com/pages/create/?ref_type=registration_form"
                                                        class="_8esh">Create a Page</a> for a celebrity, band or
                                                business.
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <iframe id="u_0_17" frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0" height="1" width="1"
                                                src="./facebook_files/referer_frame(1).html"></iframe>
                                        <iframe id="u_0_18" frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0" height="1" width="1"
                                                src="./facebook_files/referer_frame(2).html"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="">
                <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                    <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                        <li>English (US)</li>
                        <li><a class="_sv4" dir="ltr" href="https://es-la.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;en_US&quot;, &quot;https:\/\/es-la.facebook.com\/&quot;, &quot;www_list_selector&quot;, 0); return false;"
                               title="Spanish">Español</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://fr-fr.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;en_US&quot;, &quot;https:\/\/fr-fr.facebook.com\/&quot;, &quot;www_list_selector&quot;, 1); return false;"
                               title="French (France)">Français (France)</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://zh-cn.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;zh_CN&quot;, &quot;en_US&quot;, &quot;https:\/\/zh-cn.facebook.com\/&quot;, &quot;www_list_selector&quot;, 2); return false;"
                               title="Simplified Chinese (China)">中文(简体)</a></li>
                        <li><a class="_sv4" dir="rtl" href="https://ar-ar.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ar_AR&quot;, &quot;en_US&quot;, &quot;https:\/\/ar-ar.facebook.com\/&quot;, &quot;www_list_selector&quot;, 3); return false;"
                               title="Arabic">العربية</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://pt-br.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;en_US&quot;, &quot;https:\/\/pt-br.facebook.com\/&quot;, &quot;www_list_selector&quot;, 4); return false;"
                               title="Portuguese (Brazil)">Português (Brasil)</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://ko-kr.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ko_KR&quot;, &quot;en_US&quot;, &quot;https:\/\/ko-kr.facebook.com\/&quot;, &quot;www_list_selector&quot;, 5); return false;"
                               title="Korean">한국어</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://it-it.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;en_US&quot;, &quot;https:\/\/it-it.facebook.com\/&quot;, &quot;www_list_selector&quot;, 6); return false;"
                               title="Italian">Italiano</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://de-de.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;en_US&quot;, &quot;https:\/\/de-de.facebook.com\/&quot;, &quot;www_list_selector&quot;, 7); return false;"
                               title="German">Deutsch</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://hi-in.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;hi_IN&quot;, &quot;en_US&quot;, &quot;https:\/\/hi-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 8); return false;"
                               title="Hindi">हिन्दी</a></li>
                        <li><a class="_sv4" dir="ltr" href="https://ja-jp.facebook.com/"
                               onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ja_JP&quot;, &quot;en_US&quot;, &quot;https:\/\/ja-jp.facebook.com\/&quot;, &quot;www_list_selector&quot;, 9); return false;"
                               title="Japanese">日本語</a></li>
                        <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog"
                               ajaxify="/settings/language/language/?uri=https%3A%2F%2Fja-jp.facebook.com%2F&amp;source=www_list_selector_more"
                               href="https://www.facebook.com/#" title="Show more languages"><i
                                        class="img sp_rgx130KdRJA sx_600922"></i></a></li>
                    </ul>
                    <div id="contentCurve"></div>
                    <div id="pageFooterChildren" role="contentinfo" aria-label="Facebook site links">
                        <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                            <li><a href="https://www.facebook.com/r.php" title="Sign Up for Facebook">Sign Up</a></li>
                            <li><a href="https://www.facebook.com/login/" title="Log into Facebook">Log In</a></li>
                            <li><a href="https://messenger.com/" title="Check out Messenger.">Messenger</a></li>
                            <li><a href="https://www.facebook.com/lite/" title="Facebook Lite for Android.">Facebook
                                    Lite</a></li>
                            <li><a href="https://www.facebook.com/watch/" title="Browse our Watch videos."> Watch </a>
                            </li>
                            <li><a href="https://www.facebook.com/directory/people/"
                                   title="Browse our people directory.">People</a></li>
                            <li><a href="https://www.facebook.com/directory/pages/" title="Browse our pages directory.">Pages</a>
                            </li>
                            <li><a href="https://www.facebook.com/pages/category/">Page Categories</a></li>
                            <li><a href="https://www.facebook.com/places/"
                                   title="Check out popular places on Facebook.">Places</a></li>
                            <li><a href="https://www.facebook.com/games/" title="Check out Facebook games.">Games</a>
                            </li>
                            <li><a href="https://www.facebook.com/directory/places/"
                                   title="Browse our places directory.">Locations</a></li>
                            <li><a href="https://www.facebook.com/marketplace/"
                                   title="Buy and sell on Facebook Marketplace.">Marketplace</a></li>
                            <li><a href="https://pay.facebook.com/" target="_blank"
                                   title="Learn more about Facebook Pay">Facebook Pay</a></li>
                            <li><a href="https://www.facebook.com/directory/groups/"
                                   title="Browse our Groups directory.">Groups</a></li>
                            <li><a href="https://www.oculus.com/" target="_blank"
                                   title="Learn more about Oculus">Oculus</a></li>
                            <li><a href="https://portal.facebook.com/" target="_blank"
                                   title="Learn more about Portal from Facebook">Portal</a></li>
                            <li>
                                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT3jSIj1vfBO545mOW4ty43l3_HpfCHyjQ5Qvt7vP4OPc_5rcx0nwF8V2vCJ5cnMjI-R3j-SKNbvzXCftE0tRLvMsofKgUtXeTPF5wE3Y6U6zPQBXuXyVM2yHWpRNq5RAcEyflJpCVy-BCTxsy0wgfj8ojIfYHjauVFbkS-j"
                                   title="Check out Instagram" target="_blank" rel="noopener nofollow"
                                   data-lynx-mode="async">Instagram</a></li>
                            <li><a href="https://www.facebook.com/local/lists/245019872666104/"
                                   title="Browse our Local Lists directory.">Local</a></li>
                            <li><a href="https://www.facebook.com/fundraisers/" title="Donate to worthy causes.">Fundraisers</a>
                            </li>
                            <li><a href="https://www.facebook.com/biz/directory/"
                                   title="Browse our Facebook Services directory.">Services</a></li>
                            <li><a href="https://www.facebook.com/facebook" accesskey="8"
                                   title="Read our blog, discover the resource center, and find job opportunities.">About</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;extra_1=auto"
                                   title="Advertise on Facebook.">Create Ad</a></li>
                            <li><a href="https://www.facebook.com/pages/create/?ref_type=site_footer"
                                   title="Create a Page">Create Page</a></li>
                            <li><a href="https://developers.facebook.com/?ref=pf" title="Develop on our platform.">Developers</a>
                            </li>
                            <li><a href="https://www.facebook.com/careers/?ref=pf"
                                   title="Make your next career move to our awesome company.">Careers</a></li>
                            <li><a data-nocookies="1" href="https://www.facebook.com/privacy/explanation"
                                   title="Learn about your privacy and Facebook.">Privacy</a></li>
                            <li><a href="https://www.facebook.com/policies/cookies/"
                                   title="Learn about cookies and Facebook." data-nocookies="1">Cookies</a></li>
                            <li><a class="_41ug" data-nocookies="1" href="https://www.facebook.com/help/568137493302217"
                                   title="Learn about Ad Choices.">Ad Choices<i
                                            class="img sp_dd_tYGNcdGJ sx_2de664"></i></a></li>
                            <li><a data-nocookies="1" href="https://www.facebook.com/policies?ref=pf" accesskey="9"
                                   title="Review our terms and policies.">Terms</a></li>
                            <li><a href="https://www.facebook.com/help/?ref=pf" accesskey="0"
                                   title="Visit our Help Center.">Help</a></li>
                            <li><a accesskey="6" class="accessible_elem" href="https://www.facebook.com/settings"
                                   title="View and edit your Facebook settings.">Settings</a></li>
                            <li><a accesskey="7" class="accessible_elem"
                                   href="https://www.facebook.com/allactivity?privacy_source=activity_log_top_menu"
                                   title="View your activity log">Activity Log</a></li>
                        </ul>
                    </div>
                    <div class="mvl copyright">
                        <div><span> Facebook © 2020</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <span><img src="./facebook_files/hsts-pixel.gif" width="0" height="0" style="display:none"></span></div>
<div style="display:none">
    <div>
        <iframe id="u_0_19" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="1" width="1"
                src="./facebook_files/referer_frame(3).html"></iframe>
        <iframe id="u_0_1a" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" height="1" width="1"
                src="./facebook_files/referer_frame(4).html"></iframe>
    </div>
    <div></div>
    <div></div>
    <div></div>
</div>
<script type="text/javascript" nonce="">/*<![CDATA[*/
    (function () {
        function si_cj(m) {
            setTimeout(function () {
                new Image().src = "https:\/\/error.facebook.com\/common\/scribe_endpoint.php?c=si_clickjacking&t=366" + "&m=" + m;
            }, 5000);
        }

        if (top != self) {
            try {
                if (parent != top) {
                    throw 1;
                }
                var si_cj_d = ["apps.facebook.com", "apps.beta.facebook.com"];
                var href = top.location.href.toLowerCase();
                for (var i = 0; i < si_cj_d.length; i++) {
                    if (href.indexOf(si_cj_d[i]) >= 0) {
                        throw 1;
                    }
                }
                si_cj("3 ");
            } catch (e) {
                si_cj("1 \t");
                window.document.write("\u003Cstyle nonce=\"WtdJiggZ\">body * {display:none !important;}\u003C\/style>\u003Ca href=\"#\" onclick=\"top.location.href=window.location.href\" style=\"display:block !important;padding:10px\">Go to Facebook.com\u003C\/a>");/*M_aKOENJ*/
            }
        }
    }())/*]]>*/</script>
<script>requireLazy(["bx"], function (bx) {
        bx.add({"875231": {"uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yD\/r\/d4ZIVX-5C-b.ico"}});
    });
    requireLazy(["gkx"], function (gkx) {
        gkx.add({
            "677762": {"result": true, "hash": "AT4iqQGBua7A55tb"},
            "1243461": {"result": false, "hash": "AT6PquYfRo9GWdrJ"},
            "1527668": {"result": false, "hash": "AT7dpsIG8wGoTaH2"},
            "1585098": {"result": false, "hash": "AT4NNhRs3unqgZ6S"},
            "819236": {"result": false, "hash": "AT6cZ9QnocFiLOPb"},
            "729630": {"result": false, "hash": "AT4l39Bz-ktrNbZ4"},
            "729631": {"result": false, "hash": "AT4L02ICZBBpwATt"},
            "1281505": {"result": false, "hash": "AT7n4QbbxwkrDIKx"},
            "1291023": {"result": false, "hash": "AT600qmcRcUjC7L3"},
            "1294182": {"result": false, "hash": "AT4oIyFd4Zm5u_lh"},
            "1381768": {"result": true, "hash": "AT4jGJLd-3dPILKm"},
            "1399218": {"result": true, "hash": "AT6ZDrBg5x6weIXq"},
            "1401060": {"result": true, "hash": "AT79tQx4LJ3Zv476"},
            "1485055": {"result": true, "hash": "AT5L2AW1LSD2A2r2"},
            "1584797": {"result": false, "hash": "AT6VJRiXYtk9IVnD"},
            "1099893": {"result": false, "hash": "AT7K3mmR2OthkTb8"}
        });
    });
    requireLazy(["qex"], function (qex) {
        qex.add({"1527749": {"r": false}, "1527825": {"r": false}});
    });
    requireLazy(["Bootloader"], function (Bootloader) {
        Bootloader.setResourceMap({
            "ifQth": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/r\/LgMWflE7YRv.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "TTlaQ": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTt_4\/yW\/l\/en_US\/0dCzk2-iq4H.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "6pkmJ": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/bkzzZmTR6p0.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "nRw1Q": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ig1H4\/yr\/l\/en_US\/VwebigrewaW.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "9rqBw": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNdd4\/yD\/l\/en_US\/b4LiVTea0p2.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "LIwN7": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikCs4\/yz\/l\/en_US\/dYfqWQqpRrX.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "cpA4A": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ihCj4\/y1\/l\/en_US\/Via25tAveQM.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "np5Vl": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/Y5qZp-i28RO.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "FGIwO": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itG54\/yN\/l\/en_US\/bKtXrDEdgHR.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "8ELCB": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "+ClWy": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/UJOxW2IHm1a.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "BcXMJ": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ilVY4\/ym\/l\/en_US\/44CR9s_0U3m.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "Ay4XO": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/jjBgLxumF_8.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "J8wnv": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iYXl4\/yK\/l\/en_US\/mxxeQOQoWCf.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "22OTC": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yr\/r\/YaQnvmWZitt.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "aCDoV": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/tHSU4XnoGez.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "MyaQX": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/r\/d-sBacofq5b.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "IYj8C": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iqRa4\/y8\/l\/en_US\/6n-NTsDub5e.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "HcE0Q": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iT714\/yf\/l\/en_US\/m7Pkr9sL83Y.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "2\/maQ": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/WFKY8pTn9lc.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "\/mnVq": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikPw4\/yc\/l\/en_US\/e1ZCePKzdT9.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "IERyj": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/NBtuDJl862s.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "6ilbY": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ihzL4\/yy\/l\/en_US\/uGNaLwXftvI.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "VtbRn": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iq2O4\/yk\/l\/en_US\/i8VPrk5S1ma.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "VjeW6": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/l\/0,cross\/rgD7QfWcfhY.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "EA8cv": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yo\/r\/7vbWpBKLrZ_.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "fd2QE": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yo\/r\/z40EBvxVPn3.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "uzqy3": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yr\/l\/0,cross\/1c5zF22f91u.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "7BnMA": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i9Zn4\/yS\/l\/en_US\/QtOmG-wAb8M.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "SKyM5": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iO8K4\/y1\/l\/en_US\/Y09aZLdJG_8.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "BELpH": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ifNV4\/yT\/l\/en_US\/1Ttq4BzdEPv.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "TJOry": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/l\/0,cross\/LOEXFdzG0Fy.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "ePw\/7": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/l\/0,cross\/isHa9xD9ATV.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "IYXCH": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i7Xr4\/yX\/l\/en_US\/aI2MBADYqIw.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "B04Y2": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/xoRDdzlX473.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "hvNdV": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1MJ4\/yt\/l\/en_US\/YmpRJLF1Dql.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "W3wPo": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iZwL4\/y7\/l\/en_US\/tC-zr5VSAge.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "Z+QrW": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itIQ4\/y9\/l\/en_US\/tGY5QI4coY1.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "sMaTq": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/l\/0,cross\/TCMDTu8qHwm.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "Tw1FN": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/l\/0,cross\/c9jVMBnWNvW.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "kluta": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yV\/r\/MaU659mUBGZ.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "KaCTN": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3igjd4\/yY\/l\/en_US\/TRhi6nASU6W.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "lI\/b1": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3igjr4\/yJ\/l\/en_US\/ObNlL7n8vEj.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "Nxhe3": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/l\/0,cross\/Bq4IBDzMTuz.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "hFeSh": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/yL\/l\/en_US\/yC0oXHeJA71.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "JaK4x": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iwNJ4\/yZ\/l\/en_US\/u0U11JE1t3a.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "bYrQk": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/9lE5naSYClX.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "ZNN0g": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFHA4\/yR\/l\/en_US\/Mtt3cwdbnm0.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "R3qBT": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/l\/0,cross\/rkc1lP3y5yp.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "1fr6s": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/l\/0,cross\/LJMtVuNrs0K.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "gcDYl": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/nkU5dmGfqsF.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "XgkgV": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/jBQ8r16tBFM.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "4VuTu": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/bLkjVTuEXqY.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "P2FRd": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/r\/uVY0AxgTa7g.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "Eb1p3": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iajm4\/yw\/l\/en_US\/5OmuqKYxXGX.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "vvgSv": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNiF4\/yQ\/l\/en_US\/xgNxM8G_SIu.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "dmILW": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y-\/l\/0,cross\/gsCKUgGzKoc.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "GInyj": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/l\/0,cross\/HU2_zG-NjIy.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "NN6mk": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i-yJ4\/y1\/l\/en_US\/DXEeEiLkPz0.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "LlKL+": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ix2y4\/y1\/l\/en_US\/IhmOElVf3tF.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "GKnfo": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/l\/0,cross\/qRTOKkfiX9i.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "17YbG": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iDsD4\/yt\/l\/en_US\/Xnqc7GXHXUt.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "3rQnP": {
                "type": "css",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/l\/0,cross\/CPEpAKylhWM.css?_nc_x=Ij3Wp8lg5Kz"
            },
            "z61oM": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikyv4\/yY\/l\/en_US\/kaAw2p_n10j.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "kpiH1": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/ibSfAXcmUUo.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "tg9SC": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iZxC4\/yg\/l\/en_US\/0r81zSmB0CS.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "CtEk\/": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3idmL4\/yp\/l\/en_US\/kvXAJ9lq2oa.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "wQ3TL": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iqES4\/ym\/l\/en_US\/VMj5I33JQV6.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "7S171": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/r\/Lu4hrF23EWQ.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "gWMJg": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/iGksp69foR_.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "o9Nx1": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/aC_OQfaB-5m.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "VwejP": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/jlMhkbhW44p.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "Xqih5": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/r\/M0JTgMqUdZG.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "VvVFw": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/r\/AADBnDBsGZB.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "ZX+qG": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3idBq4\/yM\/l\/en_US\/fMOVaCCi5dU.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "a9vXO": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/7VbCGLMjseZ.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "AoyP3": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/r\/ySDfr2FLWnT.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "6adEh": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixXW4\/y5\/l\/en_US\/y0DWO57tAQo.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "5ladR": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/caaCmvM6rAU.js?_nc_x=Ij3Wp8lg5Kz"
            },
            "P\/mr5": {
                "type": "css",
                "src": "data:text\/css; charset=utf-8,\u002523bootloader_P_mr5{height:42px;}.bootloader_P_mr5{display:block!important;}",
                "nc": 1,
                "d": 1
            }
        }, []);
        Bootloader.enableBootload({
            "AsyncRequest": {
                "r": ["ifQth", "TTlaQ", "6pkmJ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "FbtLogging", "BanzaiScuba"], "r": ["nRw1Q", "9rqBw"]}
            },
            "Dialog": {
                "r": ["LIwN7", "ifQth", "cpA4A", "NsgUh", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg", "nRw1Q", "np5Vl"],
                "rds": {
                    "m": ["BanzaiODS", "FbtLogging", "Animation", "PageTransitions", "BanzaiScuba"],
                    "r": ["9rqBw"]
                },
                "be": 1
            },
            "ExceptionDialog": {
                "r": ["FGIwO", "ifQth", "cpA4A", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg", "nRw1Q"],
                "rds": {"m": ["BanzaiODS", "FbtLogging", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "QuickSandSolver": {
                "r": ["8ELCB", "+ClWy", "ifQth", "TTlaQ", "6pkmJ", "BcXMJ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "FbtLogging", "BanzaiScuba"], "r": ["nRw1Q", "9rqBw"]},
                "be": 1
            },
            "ConfirmationDialog": {
                "r": ["Ay4XO", "TTlaQ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["ifQth", "9rqBw"]},
                "be": 1
            },
            "BanzaiODS": {"r": ["TTlaQ", "ifQth"], "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]}},
            "BanzaiScuba": {"r": ["9rqBw", "TTlaQ", "ifQth"], "rds": {"m": ["BanzaiODS", "BanzaiScuba"]}},
            "VisualCompletionGating": {
                "r": ["nRw1Q", "ifQth", "J8wnv", "TTlaQ"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]}
            },
            "FbtLogging": {"r": ["nRw1Q"]},
            "AsyncSignal": {
                "r": ["ifQth", "22OTC", "TTlaQ"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "Dock": {
                "r": ["LIwN7", "ifQth", "TTlaQ", "4BeuA", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "TimeSliceInteractionsLiteTypedLogger": {
                "r": ["aCDoV", "TTlaQ", "ifQth"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "WebSpeedInteractionsTypedLogger": {
                "r": ["MyaQX", "TTlaQ", "ifQth"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "DOM": {
                "r": ["TTlaQ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["ifQth", "9rqBw"]},
                "be": 1
            },
            "Form": {
                "r": ["TTlaQ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["ifQth", "9rqBw"]},
                "be": 1
            },
            "FormSubmit": {
                "r": ["IYj8C", "ifQth", "TTlaQ", "6pkmJ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba", "FbtLogging"], "r": ["9rqBw", "nRw1Q"]},
                "be": 1
            },
            "Input": {"r": ["TTlaQ"], "be": 1},
            "Live": {
                "r": ["ifQth", "22OTC", "HcE0Q", "2\/maQ", "TTlaQ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "Toggler": {
                "r": ["ifQth", "TTlaQ", "4BeuA", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "Tooltip": {
                "r": ["LIwN7", "ifQth", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg"],
                "rds": {
                    "m": ["BanzaiODS", "FbtLogging", "PageTransitions", "BanzaiScuba", "Animation"],
                    "r": ["nRw1Q", "9rqBw", "np5Vl"]
                },
                "be": 1
            },
            "URI": {"r": [], "be": 1},
            "trackReferrer": {
                "r": [],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["TTlaQ", "9rqBw", "ifQth"]},
                "be": 1
            },
            "PhotoTagApproval": {
                "r": ["\/mnVq", "TTlaQ", "IERyj", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["ifQth", "9rqBw"]},
                "be": 1
            },
            "PhotoSnowlift": {
                "r": ["LIwN7", "6ilbY", "VtbRn", "VjeW6", "FGIwO", "ifQth", "22OTC", "EA8cv", "cpA4A", "fd2QE", "NsgUh", "uzqy3", "7BnMA", "SKyM5", "9rqBw", "np5Vl", "HcE0Q", "BELpH", "TJOry", "TTlaQ", "4BeuA", "ePw\/7", "IYXCH", "6pkmJ", "B04Y2", "jFzWg", "hvNdV", "IERyj", "nRw1Q", "W3wPo"],
                "rds": {
                    "m": ["Animation", "BanzaiODS", "BanzaiScuba", "VisualCompletionGating", "FbtLogging", "PageTransitions"],
                    "r": ["J8wnv"]
                },
                "be": 1
            },
            "PhotoTagger": {
                "r": ["Z+QrW", "LIwN7", "sMaTq", "6ilbY", "Tw1FN", "kluta", "KaCTN", "FGIwO", "ifQth", "22OTC", "EA8cv", "lI\/b1", "Nxhe3", "cpA4A", "hFeSh", "fd2QE", "JaK4x", "bYrQk", "ZNN0g", "NsgUh", "7BnMA", "R3qBT", "1fr6s", "gcDYl", "9rqBw", "XgkgV", "4VuTu", "P2FRd", "HcE0Q", "Eb1p3", "BELpH", "vvgSv", "dmILW", "GInyj", "NN6mk", "TTlaQ", "4BeuA", "LlKL+", "6pkmJ", "B04Y2", "jFzWg", "IERyj", "GKnfo", "17YbG", "3rQnP", "nRw1Q", "np5Vl", "WSLNY"],
                "rdfds": {
                    "m": ["GamesVideoDeleteCommentDialog.react", "GamesVideoModerationRulesNux.react", "GamesVideoCommentRemovedDialog.react"],
                    "r": ["z61oM", "kpiH1"]
                },
                "rds": {"m": ["PresenceStatus", "Animation", "BanzaiODS", "BanzaiScuba", "FbtLogging", "PageTransitions", "Banzai"]},
                "be": 1
            },
            "PhotoTags": {
                "r": ["ifQth", "\/mnVq", "TTlaQ", "IERyj", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "TagTokenizer": {
                "r": ["LIwN7", "tg9SC", "ifQth", "CtEk\/", "NsgUh", "\/mnVq", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "FbtLogging", "BanzaiScuba"], "r": ["nRw1Q", "9rqBw"]},
                "be": 1
            },
            "AsyncDialog": {
                "r": ["ifQth", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "FbtLogging", "BanzaiScuba"], "r": ["nRw1Q", "9rqBw"]},
                "be": 1
            },
            "Hovercard": {
                "r": ["LIwN7", "Tw1FN", "ifQth", "hFeSh", "NsgUh", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg"],
                "rds": {
                    "m": ["BanzaiODS", "BanzaiScuba", "FbtLogging", "PageTransitions", "Animation"],
                    "r": ["9rqBw", "nRw1Q", "np5Vl"]
                },
                "be": 1
            },
            "Banzai": {"r": ["TTlaQ", "ifQth"], "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]}, "be": 1},
            "ResourceTimingBootloaderHelper": {
                "r": ["wQ3TL", "TTlaQ"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["ifQth", "9rqBw"]},
                "be": 1
            },
            "TimeSliceHelper": {"r": ["7S171"], "be": 1},
            "XSalesPromoWWWDetailsDialogAsyncController": {"r": ["gWMJg"], "be": 1},
            "BanzaiStream": {
                "r": ["o9Nx1", "TTlaQ", "ifQth"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "SnappyCompressUtil": {"r": ["ifQth"], "be": 1},
            "XOfferController": {"r": ["VwejP"], "be": 1},
            "PerfXSharedFields": {"r": ["TTlaQ"], "be": 1},
            "KeyEventTypedLogger": {
                "r": ["TTlaQ", "Xqih5", "ifQth"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "QPLInspector": {"r": ["VvVFw"], "be": 1},
            "BladeRunnerClient": {
                "r": ["ZX+qG", "ifQth", "a9vXO", "TTlaQ", "nRw1Q"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba", "MqttLongPollingRunner"], "r": ["9rqBw"]},
                "be": 1
            },
            "BladeRunnerStreamHandler": {"r": ["TTlaQ"], "be": 1},
            "WebSession": {
                "r": [],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["TTlaQ", "ifQth", "9rqBw"]},
                "be": 1
            },
            "FalcoBladeRunnerTransport": {"r": ["AoyP3"], "be": 1},
            "ReactDOM": {
                "r": ["TTlaQ", "ifQth", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "ContextualLayerInlineTabOrder": {
                "r": ["ifQth", "hFeSh", "7BnMA", "TTlaQ", "4BeuA", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "Animation": {
                "r": ["LIwN7", "TTlaQ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["ifQth", "9rqBw"]}
            },
            "PageTransitions": {
                "r": ["nRw1Q", "LIwN7", "ifQth", "np5Vl", "TTlaQ", "6pkmJ", "jFzWg"],
                "rds": {"m": ["Animation", "PageTransitions", "BanzaiODS", "BanzaiScuba", "FbtLogging"], "r": ["9rqBw"]}
            },
            "CSSFade": {
                "r": ["TTlaQ", "jFzWg", "nRw1Q"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["ifQth", "9rqBw"]},
                "be": 1
            },
            "XUIDialogButton.react": {
                "r": ["ifQth", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg", "nRw1Q"],
                "rds": {"m": ["BanzaiODS", "FbtLogging", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "XUIDialogBody.react": {
                "r": ["TTlaQ", "4BeuA", "jFzWg", "nRw1Q", "ifQth"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "XUIDialogFooter.react": {
                "r": ["TTlaQ", "4BeuA", "jFzWg", "nRw1Q", "ifQth"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "XUIDialogTitle.react": {
                "r": ["ifQth", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "FbtLogging", "BanzaiScuba"], "r": ["nRw1Q", "9rqBw"]},
                "be": 1
            },
            "XUIGrayText.react": {
                "r": ["FGIwO", "TTlaQ", "jFzWg", "nRw1Q", "ifQth"],
                "rds": {"m": ["BanzaiODS", "BanzaiScuba"], "r": ["9rqBw"]},
                "be": 1
            },
            "DialogX": {
                "r": ["ifQth", "TTlaQ", "4BeuA", "6pkmJ", "jFzWg"],
                "rds": {"m": ["BanzaiODS", "FbtLogging", "BanzaiScuba"], "r": ["nRw1Q", "9rqBw"]},
                "be": 1
            },
            "React": {"r": ["TTlaQ"], "be": 1}
        });
    });</script>
<script>requireLazy(["InitialJSLoader"], function (InitialJSLoader) {
        InitialJSLoader.loadOnDOMContentReady(["nRw1Q", "6adEh", "LIwN7", "22OTC", "ifQth", "TTlaQ", "J8wnv", "6pkmJ", "9rqBw", "7BnMA", "5ladR", "EA8cv", "np5Vl", "P\/mr5"]);
    });</script>
<script>requireLazy(["TimeSliceImpl", "ServerJS"], function (TimeSlice, ServerJS) {
        var s = (new ServerJS());
        s.handle({
            "define": [["LinkshimHandlerConfig", [], {
                "supports_meta_referrer": true,
                "default_meta_referrer_policy": "origin-when-crossorigin",
                "switched_meta_referrer_policy": "origin",
                "non_linkshim_lnfb_mode": null,
                "link_react_default_hash": "AT0Raceej8sMdoIbGKd9ycCBgha2GpuMs48YZ_hSxhkPyUKeaMF186IHDUm0BrszvjQbYiZ6od5lSTSD6pKh1Dq7kSKQyCB9KkaQXAf9ZSUX3uL-aVj_V6plv9QNAxv2dAuk5kvyLfblME5hc-vjnycCagU",
                "untrusted_link_default_hash": "AT3ULt8CdJ8AzzTFHhohDt04B15wRMrhzpjlZAZPNKGHaNd_uAYc9zvt8aGyyljeb4lhqNPxU43l2W89GDBVMViKM7NdzhlHfs6KEQXEfez9mKJpY6dsnNSP2_dBPZgm7SsgyCUSx3vyuq2kiVvple0Zm0g",
                "linkshim_host": "l.facebook.com",
                "use_rel_no_opener": true,
                "always_use_https": true,
                "onion_always_shim": true,
                "middle_click_requires_event": true,
                "www_safe_js_mode": "asynclazy",
                "m_safe_js_mode": "MLynx_asynclazy",
                "ghl_param_link_shim": false,
                "click_ids": [],
                "is_linkshim_supported": true,
                "current_domain": "facebook.com"
            }, 27]],
            "instances": [["__inst_5b4d0c00_0_0", ["Menu", "XUIMenuWithSquareCorner", "XUIMenuTheme"], [[], {
                "id": "u_0_0",
                "behaviors": [{"__m": "XUIMenuWithSquareCorner"}],
                "theme": {"__m": "XUIMenuTheme"}
            }], 2], ["__inst_5b4d0c00_0_1", ["Menu", "MenuItem", "__markup_3310c079_0_0", "HTML", "__markup_3310c079_0_1", "__markup_3310c079_0_2", "__markup_3310c079_0_3", "XUIMenuWithSquareCorner", "XUIMenuTheme"], [[{
                "value": "key_shortcuts",
                "ctor": {"__m": "MenuItem"},
                "markup": {"__m": "__markup_3310c079_0_0"},
                "label": "Keyboard shortcut help...",
                "title": "",
                "className": null
            }, {
                "href": "\/help\/accessibility",
                "target": "_blank",
                "value": "help_center",
                "ctor": {"__m": "MenuItem"},
                "markup": {"__m": "__markup_3310c079_0_1"},
                "label": "Accessibility Help Center",
                "title": "",
                "className": null
            }, {
                "href": "\/help\/contact\/accessibility",
                "target": "_blank",
                "value": "submit_feedback",
                "ctor": {"__m": "MenuItem"},
                "markup": {"__m": "__markup_3310c079_0_2"},
                "label": "Submit feedback",
                "title": "",
                "className": null
            }, {
                "href": "\/accessibility",
                "target": "_blank",
                "value": "facebook_page",
                "ctor": {"__m": "MenuItem"},
                "markup": {"__m": "__markup_3310c079_0_3"},
                "label": "Updates from Facebook Accessibility",
                "title": "",
                "className": null
            }], {
                "id": "u_0_1",
                "behaviors": [{"__m": "XUIMenuWithSquareCorner"}],
                "theme": {"__m": "XUIMenuTheme"}
            }], 2], ["__inst_e5ad243d_0_0", ["PopoverMenu", "__inst_1de146dc_0_1", "__elem_ec77afbd_0_1", "__inst_5b4d0c00_0_1"], [{"__m": "__inst_1de146dc_0_1"}, {"__m": "__elem_ec77afbd_0_1"}, {"__m": "__inst_5b4d0c00_0_1"}, []], 2], ["__inst_e5ad243d_0_1", ["PopoverMenu", "__inst_1de146dc_0_0", "__elem_ec77afbd_0_0", "__inst_5b4d0c00_0_0"], [{"__m": "__inst_1de146dc_0_0"}, {"__m": "__elem_ec77afbd_0_0"}, {"__m": "__inst_5b4d0c00_0_0"}, []], 2], ["__inst_1de146dc_0_0", ["Popover", "__elem_1de146dc_0_0", "__elem_ec77afbd_0_0", "ContextualLayerAutoFlip", "ContextualDialogArrow"], [{"__m": "__elem_1de146dc_0_0"}, {"__m": "__elem_ec77afbd_0_0"}, [{"__m": "ContextualLayerAutoFlip"}, {"__m": "ContextualDialogArrow"}], {
                "alignh": "left",
                "position": "below"
            }], 2], ["__inst_1de146dc_0_1", ["Popover", "__elem_1de146dc_0_1", "__elem_ec77afbd_0_1", "ContextualLayerAutoFlip", "ContextualDialogArrow"], [{"__m": "__elem_1de146dc_0_1"}, {"__m": "__elem_ec77afbd_0_1"}, [{"__m": "ContextualLayerAutoFlip"}, {"__m": "ContextualDialogArrow"}], {
                "alignh": "right",
                "position": "below"
            }], 2], ["__inst_ead1e565_0_0", ["DialogX", "LayerFadeOnHide", "LayerHideOnBlur", "LayerHideOnEscape", "DialogHideOnSuccess", "LayerHideOnTransition", "LayerRemoveOnHide", "__markup_9f5fac15_0_0", "HTML"], [{
                "width": 445,
                "autohide": null,
                "titleID": "u_0_2",
                "redirectURI": null,
                "fixedTopPosition": null,
                "ignoreFixedTopInShortViewport": false,
                "label": null,
                "labelledBy": null,
                "modal": true,
                "xui": true,
                "addedBehaviors": [{"__m": "LayerFadeOnHide"}, {"__m": "LayerHideOnBlur"}, {"__m": "LayerHideOnEscape"}, {"__m": "DialogHideOnSuccess"}, {"__m": "LayerHideOnTransition"}, {"__m": "LayerRemoveOnHide"}],
                "classNames": ["_2rs6"]
            }, {"__m": "__markup_9f5fac15_0_0"}], 2], ["__inst_ead1e565_0_1", ["DialogX", "LayerFadeOnHide", "LayerHideOnBlur", "LayerHideOnEscape", "DialogHideOnSuccess", "LayerHideOnTransition", "LayerRemoveOnHide", "__markup_9f5fac15_0_1", "HTML"], [{
                "width": 445,
                "autohide": null,
                "titleID": "u_0_3",
                "redirectURI": null,
                "fixedTopPosition": null,
                "ignoreFixedTopInShortViewport": false,
                "label": null,
                "labelledBy": null,
                "modal": true,
                "xui": true,
                "addedBehaviors": [{"__m": "LayerFadeOnHide"}, {"__m": "LayerHideOnBlur"}, {"__m": "LayerHideOnEscape"}, {"__m": "DialogHideOnSuccess"}, {"__m": "LayerHideOnTransition"}, {"__m": "LayerRemoveOnHide"}],
                "classNames": ["_2rs6"]
            }, {"__m": "__markup_9f5fac15_0_1"}], 2], ["__inst_41781d56_0_0", ["ContextualDialog", "ContextualDialogArrow", "ContextualDialogXUITheme", "LayerFadeOnShow", "LayerFadeOnHide", "LayerHideOnBlur", "LayerHideOnEscape", "DialogHideOnSuccess", "LayerHideOnTransition", "LayerRemoveOnHide", "LayerAutoFocus", "ContextualLayerAutoFlip", "LayerTabIsolation", "__markup_a588f507_0_0", "HTML"], [{
                "width": 312,
                "context": null,
                "contextID": "birthday-help",
                "contextSelector": null,
                "dialogRole": "dialog",
                "labelledBy": "u_0_4",
                "position": "left",
                "alignment": "left",
                "offsetX": 0,
                "offsetY": 0,
                "arrowBehavior": {"__m": "ContextualDialogArrow"},
                "hoverShowDelay": null,
                "hoverHideDelay": null,
                "theme": {"__m": "ContextualDialogXUITheme"},
                "addedBehaviors": [{"__m": "LayerFadeOnShow"}, {"__m": "LayerFadeOnHide"}, {"__m": "LayerHideOnBlur"}, {"__m": "LayerHideOnEscape"}, {"__m": "DialogHideOnSuccess"}, {"__m": "LayerHideOnTransition"}, {"__m": "LayerRemoveOnHide"}, {"__m": "LayerAutoFocus"}, {"__m": "ContextualLayerAutoFlip"}, {"__m": "LayerTabIsolation"}]
            }, {"__m": "__markup_a588f507_0_0"}], 2], ["__inst_41781d56_0_1", ["ContextualDialog", "ContextualDialogArrow", "ContextualDialogXUITheme", "LayerFadeOnShow", "LayerFadeOnHide", "LayerHideOnBlur", "LayerHideOnEscape", "DialogHideOnSuccess", "LayerHideOnTransition", "LayerRemoveOnHide", "LayerAutoFocus", "ContextualLayerAutoFlip", "LayerTabIsolation", "__markup_a588f507_0_1", "HTML"], [{
                "width": 312,
                "context": null,
                "contextID": "gender-help",
                "contextSelector": null,
                "dialogRole": "dialog",
                "labelledBy": "u_0_9",
                "position": "left",
                "alignment": "left",
                "offsetX": 0,
                "offsetY": 0,
                "arrowBehavior": {"__m": "ContextualDialogArrow"},
                "hoverShowDelay": null,
                "hoverHideDelay": null,
                "theme": {"__m": "ContextualDialogXUITheme"},
                "addedBehaviors": [{"__m": "LayerFadeOnShow"}, {"__m": "LayerFadeOnHide"}, {"__m": "LayerHideOnBlur"}, {"__m": "LayerHideOnEscape"}, {"__m": "DialogHideOnSuccess"}, {"__m": "LayerHideOnTransition"}, {"__m": "LayerRemoveOnHide"}, {"__m": "LayerAutoFocus"}, {"__m": "ContextualLayerAutoFlip"}, {"__m": "LayerTabIsolation"}]
            }, {"__m": "__markup_a588f507_0_1"}], 2]],
            "markup": [["__markup_3310c079_0_0", {"__html": "Keyboard shortcut help..."}, 1], ["__markup_3310c079_0_1", {"__html": "Accessibility Help Center"}, 1], ["__markup_3310c079_0_2", {"__html": "Submit feedback"}, 1], ["__markup_3310c079_0_3", {"__html": "Updates from Facebook Accessibility"}, 1], ["__markup_9f5fac15_0_0", {"__html": "\u003Cdiv>\u003Cdiv class=\"_4-i0\">\u003Cdiv class=\"clearfix\">\u003Cdiv class=\"_51-u rfloat _ohf\">\u003Ca role=\"button\" class=\"_42ft _5upp _50zy layerCancel _51-t _50-0 _50z-\" data-testid=\"dialog_title_close_button\" href=\"#\" title=\"Close\">Close\u003C\/a>\u003C\/div>\u003Cdiv>\u003Ch3 id=\"u_0_2\" class=\"_52c9\">Confirm Your Birthday\u003C\/h3>\u003C\/div>\u003C\/div>\u003C\/div>\u003Cdiv class=\"_4-i2 _pig _50f4\">Is \u003Cspan class=\"_2rs9\">July 9, 1995\u003C\/span> your birthday?\u003C\/div>\u003Cdiv class=\"_5lnf uiOverlayFooter _5a8u\">\u003Ca role=\"button\" class=\"_42ft _4jy0 layerCancel _2rsa uiOverlayButton _4jy3 _517h _51sy\" href=\"#\">No\u003C\/a>\u003Cbutton value=\"1\" class=\"_42ft _4jy0 layerConfirm _2rsa uiOverlayButton _4jy3 _4jy1 selected _51sy\" type=\"submit\">Yes\u003C\/button>\u003C\/div>\u003C\/div>"}, 1], ["__markup_9f5fac15_0_1", {"__html": "\u003Cdiv>\u003Cdiv class=\"_4-i0\" id=\"birthday_age_confirmation_dialog_title\">\u003Cdiv class=\"clearfix\">\u003Cdiv class=\"_51-u rfloat _ohf\">\u003Ca role=\"button\" class=\"_42ft _5upp _50zy layerCancel _51-t _50-0 _50z-\" data-testid=\"dialog_title_close_button\" href=\"#\" title=\"Close\">Close\u003C\/a>\u003C\/div>\u003Cdiv>\u003Ch3 id=\"u_0_3\" class=\"_52c9\">Your Birthday Will Be Set to July 9, 1995\u003C\/h3>\u003C\/div>\u003C\/div>\u003C\/div>\u003Cdiv class=\"_4-i2 _pig _50f4\">No one else will see your birthday. You can change this on your profile later.\u003C\/div>\u003Cdiv class=\"_5lnf uiOverlayFooter _5a8u\">\u003Ca role=\"button\" class=\"_42ft _4jy0 layerCancel _2rsa uiOverlayButton _4jy3 _517h _51sy\" href=\"#\">Cancel\u003C\/a>\u003Cbutton value=\"1\" class=\"_42ft _4jy0 layerConfirm _2rsa uiOverlayButton _4jy3 _4jy1 selected _51sy\" type=\"submit\">OK\u003C\/button>\u003C\/div>\u003C\/div>"}, 1], ["__markup_a588f507_0_0", {"__html": "\u003Cdiv>\u003Cdiv class=\"_53iv\">\u003Cdiv>\u003Cdiv>\u003Cb>Providing your birthday\u003C\/b> helps make sure you get the right Facebook experience for your age. If you want to change who sees this, go to the About section of your profile. For more details, please visit our \u003Ca href=\"\/privacy\/explanation\/\">Data Policy\u003C\/a>.\u003C\/div>\u003C\/div>\u003Cdiv aria-label=\"Explanation tooltip for birthday registration\" id=\"u_0_4\">\u003C\/div>\u003C\/div>\u003Cdiv class=\"_5lnf uiOverlayFooter _572u\">\u003Ca role=\"button\" class=\"_42ft _4jy0 layerCancel uiOverlayButton _4jy3 _4jy1 selected _51sy\" href=\"#\">Close\u003C\/a>\u003C\/div>\u003Ca aria-label=\"Close\" class=\"layer_close_elem accessible_elem\" href=\"#\" role=\"button\" id=\"u_0_5\" aria-labelledby=\"u_0_5 u_0_4\">\u003C\/a>\u003C\/div>"}, 1], ["__markup_a588f507_0_1", {"__html": "\u003Cdiv>\u003Cdiv class=\"_53iv\">\u003Cdiv>\u003Cdiv>You can change who sees your gender on your profile later. Select Custom to choose another gender, or if you&#039;d rather not say.\u003C\/div>\u003C\/div>\u003Cdiv aria-label=\"Explanation tooltip for gender options during registration\" id=\"u_0_9\">\u003C\/div>\u003C\/div>\u003Cdiv class=\"_5lnf uiOverlayFooter _572u\">\u003Ca role=\"button\" class=\"_42ft _4jy0 layerCancel uiOverlayButton _4jy3 _4jy1 selected _51sy\" href=\"#\">Close\u003C\/a>\u003C\/div>\u003Ca aria-label=\"Close\" class=\"layer_close_elem accessible_elem\" href=\"#\" role=\"button\" id=\"u_0_a\" aria-labelledby=\"u_0_a u_0_9\">\u003C\/a>\u003C\/div>"}, 1], ["__markup_a588f507_0_2", {"__html": "\u003Cdiv class=\"_5633 _5634\">You must fill in all of the fields.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_2", {"__html": "\u003Cdiv class=\"_5633 _5634\">What\u2019s your name?\u003C\/div>"}, 1], ["__markup_9f5fac15_0_3", {"__html": "\u003Cdiv class=\"_5633 _5634\">You&#039;ll use this when you log in and if you ever need to reset your password.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_4", {"__html": "\u003Cdiv class=\"_5633 _5634\">Enter a combination of at least six numbers, letters and punctuation marks (like ! and &amp;).\u003C\/div>"}, 1], ["__markup_a588f507_0_3", {"__html": "\u003Cdiv class=\"_5633 _5634\">Please enter a valid email address.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_5", {"__html": "\u003Cdiv class=\"_5633 _5634\">Please enter a valid email address or mobile number.\u003C\/div>"}, 1], ["__markup_a588f507_0_4", {"__html": "\u003Cdiv class=\"_5633 _5634\">Please enter a valid mobile number or email address.\u003C\/div>"}, 1], ["__markup_a588f507_0_5", {"__html": "\u003Cdiv class=\"_5633 _5634\">Please re-enter your email address.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_6", {"__html": "\u003Cdiv class=\"_5633 _5634\">Please re-enter your mobile number or email address.\u003C\/div>"}, 1], ["__markup_a588f507_0_6", {"__html": "\u003Cdiv class=\"_5633 _5634\">Your emails do not match. Please try again.\u003C\/div>"}, 1], ["__markup_a588f507_0_7", {"__html": "\u003Cdiv class=\"_5633 _5634\">Your emails or mobile numbers do not match. Please try again.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_7", {"__html": "\u003Cdiv class=\"_5633 _5634\">It looks like you entered the wrong info. Please be sure to use your real birthday.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_8", {"__html": "\u003Cdiv class=\"_5633 _5634\">Please enter your age.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_9", {"__html": "\u003Cdiv class=\"_5633 _5634\">Select your birthday. You can change who can see this later.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_a", {"__html": "\u003Cdiv class=\"_5633 _5634\">Please choose a gender. You can change who can see this later.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_b", {"__html": "\u003Cdiv class=\"_5633 _5634\">Please select your pronoun.\u003C\/div>"}, 1], ["__markup_a588f507_0_8", {"__html": "\u003Cdiv class=\"_2zot\">\u003Cdiv class=\"_2zou\">Enter a mobile number or email you use regularly.\u003C\/div>\u003Cdiv class=\"_2zow\">You&#039;ll use this to log into your account. It will also help you reset your password if you ever need to.\u003C\/div>\u003C\/div>"}, 1], ["__markup_9f5fac15_0_c", {"__html": "\u003Cdiv class=\"_2acn\">\u003Cdiv class=\"_2aco\">Password strength: \u003Cb class=\"_2acp\">Too short\u003C\/b>\u003C\/div>\u003Cdiv class=\"_2act\">You need at least 6 characters.\u003C\/div>\u003C\/div>"}, 1], ["__markup_9f5fac15_0_d", {"__html": "\u003Cdiv class=\"_2acn\">\u003Cdiv class=\"_2aco\">Password strength: \u003Cb class=\"_2acp\">Too weak\u003C\/b>\u003C\/div>\u003Cdiv class=\"_2act\">Choose a password that&#039;s unique to you and difficult for others to guess.\u003C\/div>\u003C\/div>"}, 1], ["__markup_9f5fac15_0_e", {"__html": "\u003Cdiv class=\"_2acn\">\u003Cdiv class=\"_2aco\">Password strength: \u003Cb class=\"_2acq\">Strong\u003C\/b>\u003C\/div>\u003C\/div>"}, 1], ["__markup_9f5fac15_0_f", {"__html": "\u003Cdiv class=\"_2acn _1pd1\">Please set a password.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_g", {"__html": "\u003Cdiv class=\"_2acn _1pd1\">You need at least 6 characters.\u003C\/div>"}, 1], ["__markup_9f5fac15_0_h", {"__html": "\u003Cdiv class=\"_2acn _1pd1\">Please choose a stronger password.\u003C\/div>"}, 1]],
            "elements": [["__elem_835c633a_0_1", "login_form", 1], ["__elem_1edd4980_0_0", "loginbutton", 1], ["__elem_f46f4946_0_0", "u_0_c", 1], ["__elem_f46f4946_0_1", "u_0_d", 1], ["__elem_a588f507_0_1", "u_0_e", 1], ["__elem_3fc3da18_0_0", "u_0_f", 1], ["__elem_51be6cb7_0_0", "u_0_g", 1], ["__elem_1de146dc_0_0", "u_0_h", 1], ["__elem_ec77afbd_0_0", "u_0_i", 2], ["__elem_1de146dc_0_1", "u_0_j", 1], ["__elem_ec77afbd_0_1", "u_0_k", 2], ["__elem_9f5fac15_0_4", "pagelet_bluebar", 1], ["__elem_45e94dd8_0_0", "pagelet_bluebar", 1], ["__elem_a588f507_0_0", "globalContainer", 2], ["__elem_a588f507_0_2", "content", 1], ["__elem_835c633a_0_0", "reg", 1], ["__elem_9ae3fd6f_0_0", "u_0_l", 1], ["__elem_3f8a34cc_0_0", "u_0_m", 3], ["__elem_9ae3fd6f_0_1", "u_0_n", 1], ["__elem_3f8a34cc_0_1", "u_0_o", 3], ["__elem_9f5fac15_0_1", "u_0_p", 1], ["__elem_9ae3fd6f_0_2", "u_0_q", 1], ["__elem_3f8a34cc_0_2", "u_0_r", 2], ["__elem_9f5fac15_0_0", "u_0_s", 1], ["__elem_9ae3fd6f_0_3", "u_0_t", 1], ["__elem_3f8a34cc_0_3", "u_0_u", 2], ["__elem_9f5fac15_0_2", "password_field", 1], ["__elem_9ae3fd6f_0_4", "u_0_v", 1], ["__elem_3f8a34cc_0_4", "password_step_input", 2], ["__elem_ffa3c607_0_0", "birthday_wrapper", 1], ["__elem_2a23d31e_0_0", "u_0_w", 1], ["__elem_072b8e64_0_1", "birthday-help", 1], ["__elem_97e096cf_0_0", "u_0_x", 1], ["__elem_2a23d31e_0_1", "u_0_y", 1], ["__elem_072b8e64_0_2", "gender-help", 1], ["__elem_9f5fac15_0_3", "u_0_z", 2], ["__elem_3f8a34cc_0_5", "u_0_10", 1], ["__elem_ef03ea1a_0_0", "u_0_11", 1], ["__elem_ddac73b6_0_0", "u_0_12", 1], ["__elem_da4ef9a3_0_0", "u_0_13", 1], ["__elem_8937e029_0_0", "captcha_response", 1], ["__elem_a32d506f_0_0", "captcha-recaptcha", 1], ["__elem_a431e88a_0_0", "captcha-recaptcha", 1], ["__elem_a588f507_0_4", "captcha_buttons", 1], ["__elem_072b8e64_0_0", "u_0_14", 1], ["__elem_ddac73b6_0_1", "u_0_15", 1], ["__elem_da4ef9a3_0_1", "u_0_16", 1], ["__elem_a588f507_0_3", "reg_pages_msg", 1], ["__elem_a32d506f_0_1", "u_0_17", 1], ["__elem_a32d506f_0_2", "u_0_18", 1], ["__elem_a32d506f_0_3", "u_0_19", 1], ["__elem_a32d506f_0_4", "u_0_1a", 1]],
            "require": [["WebPixelRatioDetector", "startDetecting", [], [false]], ["ServiceWorkerLoginAndLogout", "login", [], []], ["ScriptPath", "set", [], ["\/", "a6bebc6e", {
                "imp_id": "0LxDVvBoezUCTVZa2",
                "ef_page": null,
                "uri": "https:\/\/www.facebook.com\/"
            }]], ["UITinyViewportAction", "init", [], []], ["ResetScrollOnUnload", "init", ["__elem_a588f507_0_0"], [{"__m": "__elem_a588f507_0_0"}]], ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_45e94dd8_0_0", "__elem_a588f507_0_0"], [[{"__m": "__elem_45e94dd8_0_0"}, {"__m": "__elem_a588f507_0_0"}]]], ["KeyboardActivityLogger", "init", [], []], ["FocusRing", "init", [], []], ["HardwareCSS", "init", [], []], ["NavigationAssistantController", "init", ["__elem_3fc3da18_0_0", "__elem_51be6cb7_0_0", "__inst_5b4d0c00_0_0", "__inst_5b4d0c00_0_1", "__inst_e5ad243d_0_0", "__inst_e5ad243d_0_1"], [{"__m": "__elem_3fc3da18_0_0"}, {"__m": "__elem_51be6cb7_0_0"}, {"__m": "__inst_5b4d0c00_0_0"}, {"__m": "__inst_5b4d0c00_0_1"}, null, {
                "accessibilityPopoverMenu": {"__m": "__inst_e5ad243d_0_0"},
                "globalPopoverMenu": null,
                "sectionsPopoverMenu": {"__m": "__inst_e5ad243d_0_1"}
            }]], ["__inst_e5ad243d_0_1"], ["__inst_1de146dc_0_0"], ["__inst_e5ad243d_0_0"], ["__inst_1de146dc_0_1"], ["AsyncRequestNectarLogging"], ["__inst_ead1e565_0_0"], ["__inst_ead1e565_0_1"], ["IntlUtils"], ["FBLynx", "setupDelegation", [], []], ["RegistrationController", "init", ["__elem_835c633a_0_0", "__elem_ddac73b6_0_0", "__elem_ddac73b6_0_1", "__elem_072b8e64_0_0", "__elem_ef03ea1a_0_0", "__elem_a588f507_0_3", "__elem_a588f507_0_4", "__elem_da4ef9a3_0_0", "__elem_da4ef9a3_0_1", "__elem_9f5fac15_0_0", "__elem_9f5fac15_0_1", "__elem_9f5fac15_0_2", "__inst_ead1e565_0_0", "__inst_ead1e565_0_1"], [{
                "regForm": {"__m": "__elem_835c633a_0_0"},
                "log_focus_name": "form_focus",
                "regButton": {"__m": "__elem_ddac73b6_0_0"},
                "captchaRegButton": {"__m": "__elem_ddac73b6_0_1"},
                "captchaBackButton": {"__m": "__elem_072b8e64_0_0"},
                "tos_container": {"__m": "__elem_ef03ea1a_0_0"},
                "pages_link": {"__m": "__elem_a588f507_0_3"},
                "captcha_buttons": {"__m": "__elem_a588f507_0_4"},
                "async_status": {"__m": "__elem_da4ef9a3_0_0"},
                "captcha_async_status": {"__m": "__elem_da4ef9a3_0_1"},
                "confirmContactpointBehavior": "show_for_email-fade",
                "confirm_component": {"__m": "__elem_9f5fac15_0_0"},
                "errorMessageNewDesign": false,
                "email_component": {"__m": "__elem_9f5fac15_0_1"},
                "password_component": {"__m": "__elem_9f5fac15_0_2"},
                "show_tooltips": false,
                "no_phone_reg_link": null,
                "allow_email_reg_dialog": null,
                "shouldShowConfirmationDialog": true,
                "birthdayConfirmationDialog": {"__m": "__inst_ead1e565_0_0"},
                "ageConfirmationDialog": {"__m": "__inst_ead1e565_0_1"},
                "shouldShowBirthdaySelectors": false,
                "prefilledBirthday": {"day": "9", "month": "7", "year": "1995"},
                "topEmailDomains": null,
                "noReEnterOnSuggestion": false,
                "persistURI": null,
                "hideReEnterOnEmail": false,
                "inReEnterExperiment": false,
                "payload": null,
                "pubKey": {"publicKey": "bb3cd883fc4d9e3dde9552b6f8787a7296d9dd35aab2c8b6561912818db9d541", "keyId": 1}
            }]], ["RegistrationInlineValidations", "register", ["__elem_9ae3fd6f_0_0", "__elem_3f8a34cc_0_0"], [{"__m": "__elem_9ae3fd6f_0_0"}, {"__m": "__elem_3f8a34cc_0_0"}, "left", "flyout_design", true, {
                "showHintFlyout": false,
                "showPasswordMeter": false,
                "passwordMeterID": "",
                "minPasswordMeterStrength": 35,
                "passwordMeterHidden": false
            }]], ["RegistrationGenderPronounWarning", "registerNameInput", ["__elem_3f8a34cc_0_0"], ["firstname", {"__m": "__elem_3f8a34cc_0_0"}]], ["StickyPlaceholderInput", "registerInput", ["__elem_3f8a34cc_0_0"], [{"__m": "__elem_3f8a34cc_0_0"}]], ["FocusListener"], ["FlipDirectionOnKeypress"], ["RegistrationInlineValidations", "register", ["__elem_9ae3fd6f_0_1", "__elem_3f8a34cc_0_1"], [{"__m": "__elem_9ae3fd6f_0_1"}, {"__m": "__elem_3f8a34cc_0_1"}, "below", "flyout_design", true, {
                "showHintFlyout": false,
                "showPasswordMeter": false,
                "passwordMeterID": "",
                "minPasswordMeterStrength": 35,
                "passwordMeterHidden": false
            }]], ["RegistrationGenderPronounWarning", "registerNameInput", ["__elem_3f8a34cc_0_1"], ["lastname", {"__m": "__elem_3f8a34cc_0_1"}]], ["StickyPlaceholderInput", "registerInput", ["__elem_3f8a34cc_0_1"], [{"__m": "__elem_3f8a34cc_0_1"}]], ["RegistrationInlineValidations", "register", ["__elem_9ae3fd6f_0_2", "__elem_3f8a34cc_0_2"], [{"__m": "__elem_9ae3fd6f_0_2"}, {"__m": "__elem_3f8a34cc_0_2"}, "left", "flyout_design", true, {
                "showHintFlyout": false,
                "showPasswordMeter": false,
                "passwordMeterID": "",
                "minPasswordMeterStrength": 35,
                "passwordMeterHidden": false
            }]], ["StickyPlaceholderInput", "registerInput", ["__elem_3f8a34cc_0_2"], [{"__m": "__elem_3f8a34cc_0_2"}]], ["RegistrationInlineValidations", "register", ["__elem_9ae3fd6f_0_3", "__elem_3f8a34cc_0_3"], [{"__m": "__elem_9ae3fd6f_0_3"}, {"__m": "__elem_3f8a34cc_0_3"}, "left", "flyout_design", true, {
                "showHintFlyout": false,
                "showPasswordMeter": false,
                "passwordMeterID": "",
                "minPasswordMeterStrength": 35,
                "passwordMeterHidden": false
            }]], ["StickyPlaceholderInput", "registerInput", ["__elem_3f8a34cc_0_3"], [{"__m": "__elem_3f8a34cc_0_3"}]], ["RegistrationInlineValidations", "register", ["__elem_9ae3fd6f_0_4", "__elem_3f8a34cc_0_4"], [{"__m": "__elem_9ae3fd6f_0_4"}, {"__m": "__elem_3f8a34cc_0_4"}, "left", "flyout_design", true, {
                "showHintFlyout": false,
                "showPasswordMeter": false,
                "passwordMeterID": "",
                "minPasswordMeterStrength": 35,
                "passwordMeterHidden": false
            }]], ["StickyPlaceholderInput", "registerInput", ["__elem_3f8a34cc_0_4"], [{"__m": "__elem_3f8a34cc_0_4"}]], ["__inst_41781d56_0_0"], ["RegistrationController", "initInformationLinkDialog", ["__elem_072b8e64_0_1", "__inst_41781d56_0_0"], [{"__m": "__elem_072b8e64_0_1"}, {"__m": "__inst_41781d56_0_0"}]], ["RegistrationInlineValidations", "register", ["__elem_ffa3c607_0_0", "__elem_2a23d31e_0_0"], [{"__m": "__elem_ffa3c607_0_0"}, {"__m": "__elem_2a23d31e_0_0"}, "left", "flyout_design", false]], ["__inst_41781d56_0_1"], ["RegistrationController", "initInformationLinkDialog", ["__elem_072b8e64_0_2", "__inst_41781d56_0_1"], [{"__m": "__elem_072b8e64_0_2"}, {"__m": "__inst_41781d56_0_1"}]], ["RegistrationInlineValidations", "register", ["__elem_97e096cf_0_0", "__elem_2a23d31e_0_1"], [{"__m": "__elem_97e096cf_0_0"}, {"__m": "__elem_2a23d31e_0_1"}, "left", "flyout_design", false, {"showCustomGender": true}]], ["RegistrationInlineValidations", "register", ["__elem_9f5fac15_0_3"], [{"__m": "__elem_9f5fac15_0_3"}, {"__m": "__elem_9f5fac15_0_3"}, "left", "flyout_design", false]], ["StickyPlaceholderInput", "registerInput", ["__elem_3f8a34cc_0_5"], [{"__m": "__elem_3f8a34cc_0_5"}]], ["RecaptchaV2IFrameHandler", "initWithElement", ["__elem_a431e88a_0_0", "__elem_8937e029_0_0"], [{"__m": "__elem_a431e88a_0_0"}, {"__m": "__elem_8937e029_0_0"}]], ["ControlledReferer"], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_0"], [{"__m": "__elem_a32d506f_0_0"}, "\u003Cform method=\"get\" action=\"https:\/\/fbsbx.com\/captcha\/recaptcha\/iframe\/\" id=\"theform\">\u003Cinput name=\"referer\" value=\"https:\/\/www.facebook.com\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"compact\" value=\"0\" type=\"hidden\" autocomplete=\"off\" \/>\u003C\/form>\u003Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\u003C\/iframe>"]], ["TimezoneAutoset", "setInputValue", ["__elem_f46f4946_0_0"], [{"__m": "__elem_f46f4946_0_0"}, 1594347590]], ["ScreenDimensionsAutoSet", "setInputValue", ["__elem_f46f4946_0_1"], [{"__m": "__elem_f46f4946_0_1"}]], ["LoginFormController", "init", ["__elem_835c633a_0_1", "__elem_1edd4980_0_0"], [{"__m": "__elem_835c633a_0_1"}, {"__m": "__elem_1edd4980_0_0"}, null, true, {
                "pubKey": {
                    "publicKey": "bb3cd883fc4d9e3dde9552b6f8787a7296d9dd35aab2c8b6561912818db9d541",
                    "keyId": 1
                }
            }]], ["BrowserPrefillLogging", "initContactpointFieldLogging", [], [{
                "contactpointFieldID": "email",
                "serverPrefill": ""
            }]], ["BrowserPrefillLogging", "initPasswordFieldLogging", [], [{"passwordFieldID": "pass"}]], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_1"], [{"__m": "__elem_a32d506f_0_1"}, "\u003Cform method=\"get\" action=\"https:\/\/googleads.g.doubleclick.net\/pagead\/viewthroughconversion\/1032622309\/\" id=\"theform\">\u003Cinput name=\"value\" value=\"1.00\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"currency_code\" value=\"USD\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"label\" value=\"Ucw2CKmSpJABEOWhsuwD\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"guid\" value=\"ON\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"script\" value=\"0\" type=\"hidden\" autocomplete=\"off\" \/>\u003C\/form>\u003Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\u003C\/iframe>"]], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_2"], [{"__m": "__elem_a32d506f_0_2"}, "\u003Cform method=\"get\" action=\"https:\/\/www.facebook.com\/sem_campaigns\/sem_pixel_test\/\" id=\"theform\">\u003Cinput name=\"google_pixel_category\" value=\"11\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"google_pixel_src\" value=\"https:\/\/googleads.g.doubleclick.net\/pagead\/viewthroughconversion\/1032622309\/?value=1.00&amp;currency_code=USD&amp;label=Ucw2CKmSpJABEOWhsuwD&amp;guid=ON&amp;script=0\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"encoded_one\" value=\"AQTcOP4zdmwFiGbpqAeBLCbgRUPmKipPCXKybgi1YkkSO3y3MlODk54Ju44APavKn2vT3LupI1ShY17SvY_6jvPm\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"encoded_two\" value=\"AQSC1TLL5i2IsYJe2OXSwA5JiAcqX-dPAvkpa_O-VMZMrRY69jl4RYWPURrxgjzk5GGtuq3F9wYzjBJ51xbnQi71\" type=\"hidden\" autocomplete=\"off\" \/>\u003C\/form>\u003Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\u003C\/iframe>"]], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_3"], [{"__m": "__elem_a32d506f_0_3"}, "\u003Cform method=\"get\" action=\"https:\/\/googleads.g.doubleclick.net\/pagead\/viewthroughconversion\/995153884\/\" id=\"theform\">\u003Cinput name=\"value\" value=\"1.00\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"currency_code\" value=\"USD\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"label\" value=\"szBrCMnWkWAQ3K_D2gM\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"guid\" value=\"ON\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"script\" value=\"0\" type=\"hidden\" autocomplete=\"off\" \/>\u003C\/form>\u003Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\u003C\/iframe>"]], ["ControlledReferer", "useFacebookRefererHtml", ["__elem_a32d506f_0_4"], [{"__m": "__elem_a32d506f_0_4"}, "\u003Cform method=\"get\" action=\"https:\/\/www.facebook.com\/sem_campaigns\/sem_pixel_test\/\" id=\"theform\">\u003Cinput name=\"google_pixel_category\" value=\"4\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"google_pixel_src\" value=\"https:\/\/googleads.g.doubleclick.net\/pagead\/viewthroughconversion\/995153884\/?value=1.00&amp;currency_code=USD&amp;label=szBrCMnWkWAQ3K_D2gM&amp;guid=ON&amp;script=0\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"encoded_one\" value=\"AQR99grCow5ckLp3XZ-XwAPUX3qdrYAfufts6gsGUVbF237LiICo49WB65MceVZ0Tdygj-VTpFVE1y1i2m8AyYC-\" type=\"hidden\" autocomplete=\"off\" \/>\u003Cinput name=\"encoded_two\" value=\"AQSh9xKY95hNRP479c4Z5JFbZPVd8AP03lVK2CNLDa83ue-__wJKeiCPSliwK3dYoeOs3vJOqEWQ8EM2GSAva1b2\" type=\"hidden\" autocomplete=\"off\" \/>\u003C\/form>\u003Ciframe frameborder=\"0\" width=\"1\" height=\"1\" onload=\"document.getElementById(&#039;theform&#039;).submit()\">\u003C\/iframe>"]], ["Animation"], ["PageTransitions"], ["Bootloader", "markComponentsAsImmediate", [], [["BanzaiODS", "BanzaiScuba", "Animation", "FbtLogging", "PageTransitions"]]], ["TimeSliceImpl"], ["ServerJS"], ["Run"], ["InitialJSLoader"]],
            "contexts": [[{"__m": "__elem_a588f507_0_1"}, true], [{"__m": "__elem_a588f507_0_2"}, true], [{"__m": "__elem_9f5fac15_0_4"}, false]]
        });
        requireLazy(["Run"], function (Run) {
            Run.onAfterLoad(function () {
                s.cleanup(TimeSlice)
            })
        });
    });

    onloadRegister_DEPRECATED(function () {
        useragentcm();
    });
    onloadRegister_DEPRECATED(function () {
        try {
            $("email").focus();
        } catch (_ignore) {
        }
    });</script>
<link rel="preload" href="./facebook_files/6Fpi59aeuTi.css" as="style" crossorigin="anonymous">
<link rel="preload" href="./facebook_files/uHFYEu3YedI.css" as="style" crossorigin="anonymous">
<link rel="preload" href="./facebook_files/yXaPSl6hcJG.css" as="style" crossorigin="anonymous">
<link rel="preload" href="./facebook_files/mIpWsx9K0WA.css" as="style" crossorigin="anonymous">
<link rel="preload" href="./facebook_files/LgMWflE7YRv.js" as="script" crossorigin="anonymous" nonce="">
<link rel="preload" href="./facebook_files/0dCzk2-iq4H.js" as="script" crossorigin="anonymous" nonce="">
<link rel="preload" href="./facebook_files/J7v5Yq6Muf2.css" as="style" crossorigin="anonymous">
<link rel="preload" href="./facebook_files/bkzzZmTR6p0.js" as="script" crossorigin="anonymous" nonce="">
<link rel="preload" href="./facebook_files/3CdGXDb4FRe.css" as="style" crossorigin="anonymous">
<link rel="preload" href="./facebook_files/lZ86cv9aR90.css" as="style" crossorigin="anonymous">
<link rel="preload" href="./facebook_files/XQAa2iTc7pE.css" as="style" crossorigin="anonymous">
<script>now_inl = (function () {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart ? function () {
            return p.now() + p.timing.navigationStart
        } : function () {
            return new Date().getTime()
        };
    })();
    requireLazy(["BigPipe"], function (BigPipe) {
        define("__bigPipe", [], window.bigPipe = new BigPipe({
            "forceFinish": true,
            "config": {"flush_pagelets_asap": true, "dispatch_pagelet_replayable_actions": false}
        }));
    });</script>
<script nonce="">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("first_response", n);
        })
    })();</script>
<script nonce="">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            sr_revision: 1002350392,
            allResources: ["4BeuA", "nRw1Q", "6adEh", "LIwN7", "22OTC", "nO6Ms", "jFzWg", "WSLNY", "ifQth", "TTlaQ", "J8wnv", "NsgUh", "6pkmJ", "9rqBw", "7BnMA", "bUJco", "f+J2L", "i7r0r", "5ladR", "EA8cv", "P/mr5", "np5Vl"],
            displayResources: ["4BeuA", "nO6Ms", "jFzWg", "WSLNY", "ifQth", "TTlaQ", "NsgUh", "6pkmJ", "bUJco", "f+J2L", "i7r0r", "P/mr5"],
            id: "first_response",
            phase: 0,
            last_in_phase: true,
            tti_phase: 0,
            all_phases: [63]
        });
    }));</script>
<script>requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.setPageID("6847670758198911167-0")
    });
    CavalryLogger.setPageID("6847670758198911167-0");</script>
<script nonce="">(function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
            bigPipe.beforePageletArrive("last_response", n);
        })
    })();</script>
<script nonce="">requireLazy(["__bigPipe"], (function (bigPipe) {
        bigPipe.onPageletArrive({
            sr_revision: 1002350392,
            resource_map: {
                FEt5G: {
                    type: "js",
                    src: "https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/6KqFq7q8hV0.js?_nc_x=Ij3Wp8lg5Kz"
                }
            },
            gkxData: {"1427308": {result: false, hash: "AT6Yqv119OIuqZ9_"}},
            allResources: ["22OTC", "FEt5G", "ifQth", "wQ3TL", "TTlaQ", "6pkmJ", "9rqBw", "nRw1Q", "J8wnv"],
            onload: ["CavalryLogger.getInstance(\"6847670758198911167-0\").setTTIEvent(\"t_domcontent\");"],
            onafterload: ["CavalryLogger.getInstance(\"6847670758198911167-0\").collectBrowserTiming(window)", "window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");", "if (window.ExitTime){CavalryLogger.getInstance(\"6847670758198911167-0\").setValue(\"t_exit\", window.ExitTime);};"],
            id: "last_response",
            phase: 63,
            jsmods: {
                define: [["UACMConfig", [], {
                    ffver: 32490,
                    ffid1: "AcE2LbDsbaqdNNxu5SPsjFJw_ntqAozKsbUC0Lmr4SUNlmfUIFV-yJpN07HCnBbRPTM",
                    ffid2: "AcFOlg_2OVDXdXqHvzJRz4Fq-pzxzVlMy3DZll3yHk9m8EqBb9_Nw1LQ43jqkBuAe4M",
                    ffid3: "AcEbxQVk8Fs7Am3sGF_Loh3B85fIQjaU1WAJ0POc7vodwmMQBidaExXWoX7Pgl3kTVEavQML9UIHoYiAOtQLtFck",
                    ffid4: "AcGrQ40uc5xAUD-RsYyJGuAFsWkbpBBVBa-YVyKX1TmBISlalwmLl9kV2vIISMNLau8"
                }, 308], ["DateFormatConfig", [], {
                    numericDateOrder: ["m", "d", "y"],
                    numericDateSeparator: "/",
                    shortDayNames: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                    timeSeparator: ":",
                    weekStart: 6,
                    formats: {
                        D: "D",
                        "D g:ia": "D g:ia",
                        "D M d": "D M d",
                        "D M d, Y": "D M d, Y",
                        "D M j": "D M j",
                        "D M j, g:ia": "D M j, g:ia",
                        "D M j, y": "D M j, y",
                        "D M j, Y g:ia": "D M j, Y g:ia",
                        "D, M j, Y": "D, M j, Y",
                        "F d": "F d",
                        "F d, Y": "F d, Y",
                        "F g": "F g",
                        "F j": "F j",
                        "F j, Y": "F j, Y",
                        "F j, Y @ g:i A": "F j, Y @ g:i A",
                        "F j, Y g:i a": "F j, Y g:i a",
                        "F jS": "F jS",
                        "F jS, g:ia": "F jS, g:ia",
                        "F jS, Y": "F jS, Y",
                        "F Y": "F Y",
                        "g A": "g A",
                        "g:i": "g:i",
                        "g:i A": "g:i A",
                        "g:i a": "g:i a",
                        "g:iA": "g:iA",
                        "g:ia": "g:ia",
                        "g:ia F jS, Y": "g:ia F jS, Y",
                        "g:iA l, F jS": "g:iA l, F jS",
                        "g:ia M j": "g:ia M j",
                        "g:ia M jS": "g:ia M jS",
                        "g:ia, F jS": "g:ia, F jS",
                        "g:iA, l M jS": "g:iA, l M jS",
                        "g:sa": "g:sa",
                        "H:I - M d, Y": "H:I - M d, Y",
                        "h:i a": "h:i a",
                        "h:m:s m/d/Y": "h:m:s m/d/Y",
                        j: "j",
                        "l F d, Y": "l F d, Y",
                        "l g:ia": "l g:ia",
                        "l, F d, Y": "l, F d, Y",
                        "l, F j": "l, F j",
                        "l, F j, Y": "l, F j, Y",
                        "l, F jS": "l, F jS",
                        "l, F jS, g:ia": "l, F jS, g:ia",
                        "l, M j": "l, M j",
                        "l, M j, Y": "l, M j, Y",
                        "l, M j, Y g:ia": "l, M j, Y g:ia",
                        "M d": "M d",
                        "M d, Y": "M d, Y",
                        "M d, Y g:ia": "M d, Y g:ia",
                        "M d, Y ga": "M d, Y ga",
                        "M j": "M j",
                        "M j, Y": "M j, Y",
                        "M j, Y g:i A": "M j, Y g:i A",
                        "M j, Y g:ia": "M j, Y g:ia",
                        "M jS, g:ia": "M jS, g:ia",
                        "M Y": "M Y",
                        "M y": "M y",
                        "m-d-y": "m-d-y",
                        "M. d": "M. d",
                        "M. d, Y": "M. d, Y",
                        "j F Y": "j F Y",
                        "m.d.y": "m.d.y",
                        "m/d": "m/d",
                        "m/d/Y": "m/d/Y",
                        "m/d/y": "m/d/y",
                        "m/d/Y g:ia": "m/d/Y g:ia",
                        "m/d/y H:i:s": "m/d/y H:i:s",
                        "m/d/Y h:m": "m/d/Y h:m",
                        n: "n",
                        "n/j": "n/j",
                        "n/j, g:ia": "n/j, g:ia",
                        "n/j/y": "n/j/y",
                        Y: "Y",
                        "Y-m-d": "Y-m-d",
                        "Y/m/d": "Y/m/d",
                        "y/m/d": "y/m/d",
                        "j / F / Y": "j / F / Y"
                    },
                    ordinalSuffixes: {
                        "1": "st",
                        "2": "nd",
                        "3": "rd",
                        "4": "th",
                        "5": "th",
                        "6": "th",
                        "7": "th",
                        "8": "th",
                        "9": "th",
                        "10": "th",
                        "11": "th",
                        "12": "th",
                        "13": "th",
                        "14": "th",
                        "15": "th",
                        "16": "th",
                        "17": "th",
                        "18": "th",
                        "19": "th",
                        "20": "th",
                        "21": "st",
                        "22": "nd",
                        "23": "rd",
                        "24": "th",
                        "25": "th",
                        "26": "th",
                        "27": "th",
                        "28": "th",
                        "29": "th",
                        "30": "th",
                        "31": "st"
                    }
                }, 165], ["LocaleInitialData", [], {
                    locale: "en_US",
                    language: "English (US)"
                }, 273], ["RegistrationClientConfig", ["__markup_a588f507_0_2", "HTML", "__markup_9f5fac15_0_2", "__markup_9f5fac15_0_3", "__markup_9f5fac15_0_4", "__markup_a588f507_0_3", "__markup_9f5fac15_0_5", "__markup_a588f507_0_4", "__markup_a588f507_0_5", "__markup_9f5fac15_0_6", "__markup_a588f507_0_6", "__markup_a588f507_0_7", "__markup_9f5fac15_0_7", "__markup_9f5fac15_0_8", "__markup_9f5fac15_0_9", "__markup_9f5fac15_0_a", "__markup_9f5fac15_0_b", "__markup_a588f507_0_8", "__markup_9f5fac15_0_c", "__markup_9f5fac15_0_d", "__markup_9f5fac15_0_e", "__markup_9f5fac15_0_f", "__markup_9f5fac15_0_g", "__markup_9f5fac15_0_h"], {
                    fields: {
                        NAME: "name",
                        FIRSTNAME: "firstname",
                        LASTNAME: "lastname",
                        EMAIL: "reg_email__",
                        EMAIL_CONFIRMATION: "reg_email_confirmation__",
                        GENDER: "sex",
                        PASSWORD: "reg_passwd__",
                        BIRTHDAY_AGE: "birthday_age",
                        BIRTHDAY_DAY: "birthday_day",
                        BIRTHDAY_MONTH: "birthday_month",
                        BIRTHDAY_YEAR: "birthday_year",
                        BIRTHDAY_WRAPPER: "birthday_wrapper",
                        GENDER_WRAPPER: "gender_wrapper"
                    },
                    persisted: ["birthday_day", "birthday_month", "birthday_year", "sex", "reg_email__", "firstname", "lastname", "fullname", "current_step_number", "use_custom_gender", "custom_gender", "welcome_step_completed", "did_use_age"],
                    tooltips: {
                        FIRSTNAME: "firstname_tooltip",
                        LASTNAME: "lastname_tooltip",
                        EMAIL: "email_tooltip",
                        EMAIL_CONFIRMATION: "email_confirmation_tooltip",
                        SECOND_CONTACTPOINT: "second_contactpoint_tooltip",
                        PASSWORD: "password_tooltip"
                    },
                    validators: {types: {TEXT: "text", SELECTORS: "selectors", RADIO: "radio", PASSWORD: "password"}},
                    messages: {
                        MISSING_FIELDS: {__m: "__markup_a588f507_0_2"},
                        INCORRECT_NAME: {__m: "__markup_9f5fac15_0_2"},
                        INCORRECT_CONTACTPOINT: {__m: "__markup_9f5fac15_0_3"},
                        PASSWORD_BLANK: {__m: "__markup_9f5fac15_0_4"},
                        INVALID_EMAIL: {__m: "__markup_a588f507_0_3"},
                        INVALID_CONTACTPOINT: {__m: "__markup_9f5fac15_0_5"},
                        INVALID_NUMBER_OR_EMAIL: {__m: "__markup_a588f507_0_4"},
                        INCORRECT_EMAIL_CONF: {__m: "__markup_a588f507_0_5"},
                        INCORRECT_NUMBER_OR_EMAIL_CONF: {__m: "__markup_9f5fac15_0_6"},
                        EMAIL_RETYPE_DIFFERENT: {__m: "__markup_a588f507_0_6"},
                        CONTACTPOINT_RETYPE_DIFFERENT: {__m: "__markup_a588f507_0_7"},
                        SUPER_YOUNG_BIRTHDAY: {__m: "__markup_9f5fac15_0_7"},
                        INVALID_AGE: {__m: "__markup_9f5fac15_0_8"},
                        INCOMPLETE_BIRTHDAY: {__m: "__markup_9f5fac15_0_9"},
                        NO_GENDER: {__m: "__markup_9f5fac15_0_a"},
                        NO_PRONOUN: {__m: "__markup_9f5fac15_0_b"}
                    },
                    hint_messages: {CONTACTPOINT: {__m: "__markup_a588f507_0_8"}},
                    password_meter: {
                        TOO_SHORT: {__m: "__markup_9f5fac15_0_c"},
                        TOO_WEAK: {__m: "__markup_9f5fac15_0_d"},
                        STRONG: {__m: "__markup_9f5fac15_0_e"}
                    },
                    password_inline_error: {
                        EMPTY: {__m: "__markup_9f5fac15_0_f"},
                        TOO_SHORT: {__m: "__markup_9f5fac15_0_g"},
                        TOO_WEAK: {__m: "__markup_9f5fac15_0_h"}
                    },
                    logging: {
                        enabled: false,
                        categories: {INLINE: "inline", SERVER: "server"},
                        types: {
                            IS_EMPTY: "is_empty",
                            CONTACTPOINT_INVALID: "contactpoint_invalid",
                            CONTACTPOINT_TAKEN: "contactpoint_taken",
                            CONTACTPOINT_MATCH: "contactpoint_match",
                            PASSWORD_WEAK: "password_weak",
                            PASSWORD_SHORT: "password_short",
                            TERMS_AGREEMENT: "terms_agreement",
                            TOO_YOUNG: "too_young",
                            SUPER_YOUNG_BIRTHDAY: "super_young_birthday",
                            ACCOUNT_DISABLED: "account_disabled",
                            BAD_CAPTCHA: "bad_captcha",
                            NAME_REJECTED: "name_rejected",
                            SI_BLOCK: "si_block",
                            BIRTHDAY_INVALID: "birthday_invalid",
                            INVALID_AGE: "invalid_age"
                        }
                    },
                    www_phone: true
                }, 87], ["TrackingConfig", [], {domain: "https://pixel.facebook.com"}, 325], ["CLDRDateRenderingClientRollout", [], {formatDateClientLoggerSamplingRate: 0.0001}, 3003], ["CLDRDateFormatConfig", [], {
                    supportedPHPFormatsKeys: {
                        D: "E",
                        "D g:ia": "Ejm",
                        "D M d": "MMMEd",
                        "D M d, Y": "yMMMEd",
                        "D M j": "MMMEd",
                        "D M j, y": "yMMMEd",
                        "D, M j": "MMMEd",
                        "D, M j, Y": "yMMMEd",
                        "F d": "MMMMd",
                        "F d, Y": "date_long",
                        "F j": "MMMMd",
                        "F j, Y": "date_long",
                        "F j, Y @ g:i A": "dateTime_long_short",
                        "F j, Y g:i a": "dateTime_long_short",
                        "F j, Y @ g:i:s A": "dateTime_long_medium",
                        "F jS": "MMMMd",
                        "F jS, g:ia": "dateTime_long_short",
                        "F jS, Y": "date_long",
                        "F Y": "yMMMM",
                        "g A": "j",
                        "G:i": "time_short",
                        "g:i": "time_short",
                        "g:i a": "time_short",
                        "g:i A": "time_short",
                        "g:i:s A": "time_medium",
                        "g:ia": "time_short",
                        "g:iA": "time_short",
                        "g:ia F jS, Y": "dateTime_long_short",
                        "g:iA l, F jS": "dateTime_full_short",
                        "g:ia M jS": "dateTime_medium_short",
                        "g:ia, F jS": "dateTime_long_short",
                        "g:iA, l M jS": "dateTime_full_short",
                        "h:i a": "time_short",
                        "h:m:s m/d/Y": "dateTime_short_short",
                        j: "d",
                        "j F Y": "date_long",
                        "l F d, Y": "date_full",
                        "l, F d, Y": "date_full",
                        "l, F j": "date_full",
                        "l, F j, Y": "date_full",
                        "l, F jS": "date_full",
                        "l, F jS, g:ia": "dateTime_full_short",
                        "l, M j": "date_full",
                        "l, M j, Y": "date_full",
                        "l, M j, Y g:ia": "dateTime_full_short",
                        "M d": "MMMd",
                        "M d, Y": "date_medium",
                        "M d, Y g:ia": "dateTime_medium_short",
                        "M d, Y ga": "dateTime_medium_short",
                        "M j": "MMMd",
                        "M j, Y": "date_medium",
                        "M j, Y g:i A": "dateTime_medium_short",
                        "M j, Y g:ia": "dateTime_medium_short",
                        "M jS, g:ia": "dateTime_medium_short",
                        "M y": "yMMM",
                        "M Y": "yMMM",
                        "M. d": "MMMd",
                        "M. d, Y": "date_medium",
                        "m/d": "Md",
                        "m/d/Y g:ia": "dateTime_short_short",
                        "m/d/y H:i:s": "dateTime_short_short",
                        n: "M",
                        "n/j": "Md",
                        "n/j, g:ia": "dateTime_short_short",
                        "n/j/y": "date_short",
                        Y: "y"
                    },
                    isLocaleInConfigerator: true,
                    CLDRConfigeratorFormats: {
                        dateFormats: {full: "EEEE, MMMM d, y", long: "MMMM d, y", medium: "MMM d, y", short: "M/d/yy"},
                        timeFormats: {
                            full: "h:mm:ss a zzzz",
                            long: "h:mm:ss a z",
                            medium: "h:mm:ss a",
                            short: "h:mm a"
                        },
                        dateTimeFormats: {
                            full: "{1} 'at' {0}",
                            long: "{1} 'at' {0}",
                            medium: "{1}, {0}",
                            short: "{1}, {0}"
                        },
                        availableFormats: {
                            Bh: "h B",
                            Bhm: "h:mm B",
                            Bhms: "h:mm:ss B",
                            E: "ccc",
                            EBhm: "E h:mm B",
                            EBhms: "E h:mm:ss B",
                            EHm: "E HH:mm",
                            EHms: "E HH:mm:ss",
                            Ed: "d E",
                            Ehm: "E h:mm a",
                            Ehms: "E h:mm:ss a",
                            Gy: "y G",
                            GyMMM: "MMM y G",
                            GyMMMEd: "E, MMM d, y G",
                            GyMMMd: "MMM d, y G",
                            H: "HH",
                            Hm: "HH:mm",
                            Hms: "HH:mm:ss",
                            Hmsv: "HH:mm:ss v",
                            Hmv: "HH:mm v",
                            M: "L",
                            MEd: "E, M/d",
                            MMM: "LLL",
                            MMMEd: "E, MMM d",
                            "MMMMW-count-one": "'week' W 'of' MMMM",
                            "MMMMW-count-other": "'week' W 'of' MMMM",
                            MMMMd: "MMMM d",
                            MMMd: "MMM d",
                            Md: "M/d",
                            d: "d",
                            h: "h a",
                            hm: "h:mm a",
                            hms: "h:mm:ss a",
                            hmsv: "h:mm:ss a v",
                            hmv: "h:mm a v",
                            ms: "mm:ss",
                            y: "y",
                            yM: "M/y",
                            yMEd: "E, M/d/y",
                            yMMM: "MMM y",
                            yMMMEd: "E, MMM d, y",
                            yMMMM: "MMMM y",
                            yMMMd: "MMM d, y",
                            yMd: "M/d/y",
                            yQQQ: "QQQ y",
                            yQQQQ: "QQQQ y",
                            "yw-count-one": "'week' w 'of' Y",
                            "yw-count-other": "'week' w 'of' Y"
                        }
                    },
                    CLDRRegionalConfigeratorFormats: {
                        dateFormats: {full: "EEEE, MMMM d, y", long: "MMMM d, y", medium: "MMM d, y", short: "M/d/yy"},
                        timeFormats: {
                            full: "h:mm:ss a zzzz",
                            long: "h:mm:ss a z",
                            medium: "h:mm:ss a",
                            short: "h:mm a"
                        },
                        dateTimeFormats: {
                            full: "{1} 'at' {0}",
                            long: "{1} 'at' {0}",
                            medium: "{1}, {0}",
                            short: "{1}, {0}"
                        },
                        availableFormats: {
                            Bh: "h B",
                            Bhm: "h:mm B",
                            Bhms: "h:mm:ss B",
                            E: "ccc",
                            EBhm: "E h:mm B",
                            EBhms: "E h:mm:ss B",
                            EHm: "E HH:mm",
                            EHms: "E HH:mm:ss",
                            Ed: "d E",
                            Ehm: "E h:mm a",
                            Ehms: "E h:mm:ss a",
                            Gy: "y G",
                            GyMMM: "MMM y G",
                            GyMMMEd: "E, MMM d, y G",
                            GyMMMd: "MMM d, y G",
                            H: "HH",
                            Hm: "HH:mm",
                            Hms: "HH:mm:ss",
                            Hmsv: "HH:mm:ss v",
                            Hmv: "HH:mm v",
                            M: "L",
                            MEd: "E, M/d",
                            MMM: "LLL",
                            MMMEd: "E, MMM d",
                            "MMMMW-count-one": "'week' W 'of' MMMM",
                            "MMMMW-count-other": "'week' W 'of' MMMM",
                            MMMMd: "MMMM d",
                            MMMd: "MMM d",
                            Md: "M/d",
                            d: "d",
                            h: "h a",
                            hm: "h:mm a",
                            hms: "h:mm:ss a",
                            hmsv: "h:mm:ss a v",
                            hmv: "h:mm a v",
                            ms: "mm:ss",
                            y: "y",
                            yM: "M/y",
                            yMEd: "E, M/d/y",
                            yMMM: "MMM y",
                            yMMMEd: "E, MMM d, y",
                            yMMMM: "MMMM y",
                            yMMMd: "MMM d, y",
                            yMd: "M/d/y",
                            yQQQ: "QQQ y",
                            yQQQQ: "QQQQ y",
                            "yw-count-one": "'week' w 'of' Y",
                            "yw-count-other": "'week' w 'of' Y"
                        }
                    },
                    CLDRToPHPSymbolConversion: {
                        yyyy: "Y",
                        yy: "y",
                        y: "Y",
                        MMMMM: "M",
                        MMMM: "F",
                        MMM: "M",
                        MM: "m",
                        M: "n",
                        dd: "d",
                        d: "j",
                        EEEEE: "D",
                        EEEE: "l",
                        EEE: "D",
                        EE: "D",
                        E: "D",
                        aaaaa: "A",
                        aaaa: "A",
                        aaa: "A",
                        aa: "A",
                        a: "A",
                        bbbbb: "A",
                        bbbb: "A",
                        bbb: "A",
                        bb: "A",
                        b: "A",
                        BBBBB: "A",
                        BBBB: "A",
                        BBB: "A",
                        BB: "A",
                        B: "A",
                        HH: "H",
                        H: "G",
                        hh: "h",
                        h: "g",
                        K: "g",
                        mm: "i",
                        ss: "s",
                        z: "",
                        zz: "",
                        zzz: "",
                        ccccc: "D",
                        cccc: "l",
                        ccc: "D",
                        cc: "D",
                        c: "D",
                        LLLLL: "M",
                        LLLL: "f",
                        LLL: "M",
                        LL: "m",
                        L: "n",
                        G: ""
                    },
                    intlDateSpecialChars: {cldrDelimiter: "'", singleQuote: "'", singleQuoteHolder: "*"}
                }, 3019], ["IsInternSite", [], {is_intern_site: false}, 4517], ["CaptchaClientConfig", [], {recaptchaPublicKey: "6LfDxsYSAAAAAGGLBGaRurawNnbvAGQw5UwRWYXL"}, 83], ["cr:917439", ["PageTransitionsBlue"], {__rc: ["PageTransitionsBlue", "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["cr:1108857", [], {__rc: [null, "Aa1_VMzeLmGm4snnMyfEzsFYy6WbHjzyb_cp5L0lCZzLorjdKxPfoBobQ-mMOrfSfTvllvhPFRFDvw"]}, -1], ["cr:1269707", [], {__rc: [null, "Aa09kEqJUEe8XTzyRU_PgBSiR3iJwiPSGYOkpz__zddWYYG155rBwUjOkyQt4TZZQuhngV-__JVhKaz0L5Y"]}, -1], ["cr:1269708", [], {__rc: [null, "Aa09kEqJUEe8XTzyRU_PgBSiR3iJwiPSGYOkpz__zddWYYG155rBwUjOkyQt4TZZQuhngV-__JVhKaz0L5Y"]}, -1], ["cr:1269709", [], {__rc: [null, "Aa09kEqJUEe8XTzyRU_PgBSiR3iJwiPSGYOkpz__zddWYYG155rBwUjOkyQt4TZZQuhngV-__JVhKaz0L5Y"]}, -1], ["cr:1294158", ["React.classic"], {__rc: ["React.classic", "Aa2778MjE8VdTtJaxFWvsyu8Dpiqjw0QBUpW7OqhSdMHyQhcF3nizALmGBOZpetGJPDCvkkXouss-MB2WNaJbAt_"]}, -1], ["cr:1294246", ["ReactDOM.classic"], {__rc: ["ReactDOM.classic", "Aa2778MjE8VdTtJaxFWvsyu8Dpiqjw0QBUpW7OqhSdMHyQhcF3nizALmGBOZpetGJPDCvkkXouss-MB2WNaJbAt_"]}, -1], ["cr:888908", ["warningBlue"], {__rc: ["warningBlue", "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["cr:971473", ["LayerHideOnTransition"], {__rc: ["LayerHideOnTransition", "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["cr:1069930", [], {__rc: [null, "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["cr:1083116", ["XAsyncRequest"], {__rc: ["XAsyncRequest", "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["cr:1083117", [], {__rc: [null, "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["cr:1105154", [], {__rc: [null, "Aa1_VMzeLmGm4snnMyfEzsFYy6WbHjzyb_cp5L0lCZzLorjdKxPfoBobQ-mMOrfSfTvllvhPFRFDvw"]}, -1], ["cr:1109759", ["CookieConsentBlacklist"], {__rc: ["CookieConsentBlacklist", "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["PageTransitionsConfig", [], {reloadOnBootloadError: true}, 1067], ["CoreWarningGK", [], {forceWarning: false}, 725], ["cr:1292365", ["React-prod.classic"], {__rc: ["React-prod.classic", "Aa1_VMzeLmGm4snnMyfEzsFYy6WbHjzyb_cp5L0lCZzLorjdKxPfoBobQ-mMOrfSfTvllvhPFRFDvw"]}, -1], ["cr:1344485", ["ReactDOM.classic.prod-or-profiling"], {__rc: ["ReactDOM.classic.prod-or-profiling", "Aa1_VMzeLmGm4snnMyfEzsFYy6WbHjzyb_cp5L0lCZzLorjdKxPfoBobQ-mMOrfSfTvllvhPFRFDvw"]}, -1], ["cr:983844", [], {__rc: [null, "Aa1_VMzeLmGm4snnMyfEzsFYy6WbHjzyb_cp5L0lCZzLorjdKxPfoBobQ-mMOrfSfTvllvhPFRFDvw"]}, -1], ["cr:1344486", ["ReactDOM.classic.prod"], {__rc: ["ReactDOM.classic.prod", "Aa1H4oK3OELuckfgFNRucP3Z8rhqowqCSYQVnJdwVIFyZI9BnWh26r00joIJHxP4Qg5eQlg6b9BzVHvakvbfD3mY5yIyPA"]}, -1], ["cr:1344487", ["ReactDOM-prod.classic"], {__rc: ["ReactDOM-prod.classic", "Aa2pwxA68m_K2yfEkSaoEEMrvb0kaM0UcOpRGXtl36DC2pENJGw_jd2oBALiMsz2dKkK7hkvJy3YM5HHSgu8ZmG94CV5D2lrXUGN"]}, -1], ["cr:1292369", ["SchedulerTracing-prod.classic"], {__rc: ["SchedulerTracing-prod.classic", "Aa1H4oK3OELuckfgFNRucP3Z8rhqowqCSYQVnJdwVIFyZI9BnWh26r00joIJHxP4Qg5eQlg6b9BzVHvakvbfD3mY5yIyPA"]}, -1], ["cr:1353359", ["EventListenerImplForBlue"], {__rc: ["EventListenerImplForBlue", "Aa0ftcS3JeatGbQSB8J5_P6ueO9POTIq-FSHb4Z1L9cH5q1nhAZnAz_7dlFKotRM5zHLgemZljv9qq3alg0QBIzFFYDHWQ"]}, -1], ["cr:1463139", ["ReactFiberErrorDialogBlue"], {__rc: ["ReactFiberErrorDialogBlue", "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["cr:1458113", [], {__rc: [null, "Aa36f0Y6OmSJaWArYPdXcvyZM3kbItNOFnRqdCK0h-rTbPAjNtTIhrv_wC0OhuBXVSBvmUadw_-UjZXA59k2slddvZQ"]}, -1], ["KillabyteProfilerConfig", [], {
                    htmlProfilerModule: null,
                    profilerModule: null,
                    depTypes: {BL: "bl", NON_BL: "non-bl"}
                }, 1145], ["QuicklingConfig", [], {
                    version: "1002350392;0;",
                    sessionLength: 30,
                    inactivePageRegex: "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                    badRequestKeys: ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                    logRefreshOverhead: false
                }, 60], ["WebStorageMonsterLoggingURI", [], {uri: "/ajax/webstorage/process_keys/?state=1"}, 3032], ["WebDevicePerfInfoData", [], {
                    needsFullUpdate: true,
                    needsPartialUpdate: false,
                    shouldLogResourcePerf: false
                }, 3977], ["BrowserPaymentHandlerConfig", [], {enabled: false}, 3904], ["TimeSpentConfig", [], {
                    "0_delay": 0,
                    "0_timeout": 8,
                    delay: 1000,
                    timeout: 64
                }, 142], ["cr:1333160", ["UserActivityBlue"], {__rc: ["UserActivityBlue", "Aa2GTHQ6QqNAdJ2OEEAd8oIZwuAaJxGsJNaLG60blZvGfeRdPtAaMGyzp0FdiRxrVw-cMsfaWsO2ObDAyQIUpL5Tl9NPMblt"]}, -1], ["cr:1351741", ["CometEventListener"], {__rc: ["CometEventListener", "Aa1sjzWPb-te_kJ3eIFWrTsEoFB6C-Oojapnr2UNRJNCJzIQ2I3demLX0ym7VmbKIqfde2Z5KzSWeWis5iaQd1IX22Lp1bTq-XS-CEfBo8BRmi9o"]}, -1], ["cr:844180", ["TimeSpentImmediateActiveSecondsLoggerBlue"], {__rc: ["TimeSpentImmediateActiveSecondsLoggerBlue", "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["cr:1187159", ["BlueCompatBroker"], {__rc: ["BlueCompatBroker", "Aa2rbISzCYHp3GlrC41KxvZ2qYaovgVwanYJ_Su-4nkOgOt-DVGEybkFEv7KIHFlvSf_RDyCMhgGJWu3qr0JmFo"]}, -1], ["ImmediateActiveSecondsConfig", [], {sampling_rate: 0}, 423]],
                require: [["TrackingPixel", "loadWithNoReferrer", [], ["https://cx.atdmt.com/?f=AYwDNU8p-ma1DSqGzd7s_RNGSx_PWOfqBrzJCsIrV3OoDSrbIsCbQHeSpYbfCeiB5BR6rKKjIxs_54Ixf8wPvuSO&c=744693989&v=1&l=2"]], ["CavalryLoggerImpl", "startInstrumentation", [], []], ["NavigationMetrics", "setPage", [], [{
                    page: "/",
                    page_type: "normal",
                    page_uri: "https://www.facebook.com/",
                    serverLID: "6847670758198911167-0"
                }]], ["Chromedome", "start", [], [[]]], ["DimensionTracking"], ["HighContrastMode", "init", [], [{
                    isHCM: false,
                    spacerImage: "https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/-PAXP-deijE.gif"
                }]], ["ClickRefLogger"], ["DetectBrokenProxyCache", "run", [], [0, "c_user"]], ["TimeSliceImpl", "setLogging", [], [false, 0.01]], ["NavigationClickPointHandler"], ["WebStorageMonster", "schedule", [], [true]], ["CookieCore", "setWithoutChecksIfFirstPartyContext", [], ["_js_datr", "RtAHXzV_C1VokYGCywutIVyY", 63072000000, "/", true]], ["WebDevicePerfInfoLogging", "doLog", [], []], ["Artillery", "disable", [], []], ["ArtilleryOnUntilOffLogging", "disable", [], []], ["ArtilleryRequestDataCollection", "disable", [], ["6847670758198911167-0"]], ["ScriptPathLogger", "startLogging", [], []], ["TimeSpentBitArrayLogger", "init", [], []], ["ArtilleryRequestDataCollection", "init", [], []], ["Bootloader", "markComponentsAsImmediate", [], [["VisualCompletionGating"]]]]
            },
            last_in_phase: true,
            the_end: true
        });
    }));</script>
<iframe frameborder="0" height="1" width="1" src="./facebook_files/referer_frame(5).html"
        style="position: absolute; top: -10px;"></iframe>
</body>
</html>