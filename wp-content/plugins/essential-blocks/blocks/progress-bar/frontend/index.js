!function(){var e=function(e){var t=e.getBoundingClientRect();return t.top>=0&&t.left>=0&&t.bottom<=(window.innerHeight||document.documentElement.clientHeight)&&t.right<=(window.innerWidth||document.documentElement.clientWidth)};window.addEventListener("DOMContentLoaded",(function(t){var r=document.querySelectorAll(".eb-progressbar");r&&r.forEach((function(t){var r=!1,i=t.getAttribute("data-layout"),n=t.getAttribute("data-count"),o=t.getAttribute("data-duration");function l(){setTimeout((function(){!r&&e(t)&&(function(e){var t=e.duration,r=e.draw,i=e.timing,n=performance.now();requestAnimationFrame((function e(o){var l=(o-n)/t;l>1&&(l=1);var a=i(l);r(a),l<1&&requestAnimationFrame(e)}))}({duration:o,timing:function(e){return e},draw:function(e){var r=Math.floor(100*e);if(r<=n){if("line"===i||"line_rainbow"===i)t.querySelector(".eb-progressbar-line-fill").style.width=r+"%";else if("circle"===i||"circle_fill"===i){var o=3.6*r;t.querySelector(".eb-progressbar-circle-half-left").style.transform="rotate("+o+"deg)",o>180&&(t.querySelector(".eb-progressbar-circle-pie").style.clipPath="inset(0)",t.querySelector(".eb-progressbar-circle-half-right").style.visibility="visible")}else"half_circle"===i||"half_circle_fill"===i?(o=1.8*r,t.querySelector(".eb-progressbar-circle-half").style.transform="rotate("+o+"deg)"):"box"===i&&(t.querySelector(".eb-progressbar-box-fill").style.height=r+"%");t.querySelector(".eb-progressbar-count")&&(t.querySelector(".eb-progressbar-count").innerText=r)}}}),r=!0)}),20)}e(t)&&l(),window.addEventListener("scroll",function(e){var t,r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:10,i=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];return function(){var n=this,o=arguments;function l(){t=null,i||e.apply(n,o)}var a=i&&!t;clearTimeout(t),t=setTimeout(l,r),a&&e.apply(n,o)}}(l))}))}))}();