"use strict";$(".middle-input").on("input",function(){var e=$(this).val();$.ajax({url:"https://suggest.taobao.com/sug?code=utf-8&q="+e+"&_ksTS=1593314375249_483&k=1&area=c2c&bucketid=12",success:function(e){$(".middle-input-ul").empty(),$.each(e.result,function(e,i){$(".middle-input-ul").append("<li>"+i[0]+"</li>").addClass("middle-input-ul-style").eq(e).on("click",function(){window.open("details.html")})})},dataType:"jsonp"})}),window.onload=function(){new Swiper(".banner-swiper",{loop:!0,autoplay:!0,effect:"fade",pagination:{el:".swiper-pagination"},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}}),new Swiper(".nicebrand-swiper",{loop:!0,autoplay:!0,slidesPerView:3,slidesPerGroup:3,spaceBetween:5,pagination:{el:".swiper-pagination"}})};