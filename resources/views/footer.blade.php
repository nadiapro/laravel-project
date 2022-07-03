<footer>
    <div>
        <ul>

            <li style="font-weight: bolder; border-bottom:1px solid white">مقالات</li>
            @foreach ($articles as $article)
            <li><a href="{{ route('article' , ['id' => $article->id]) }}"> {{ $article->title }} </a></li>
            @endforeach
        </ul>
    </div>
    <div>
        <ul>
            <li style="font-weight: bolder; border-bottom:1px solid white">شبکه های اجتماعی</li>
            <li><a href="#">تلگرام</a></li>
            <li><a href="#">توییتر</a></li>
            <li><a href="#">اینستاگرام</a></li>
        </ul>
    </div>
    <div>
        <ul>
            <li style="font-weight: bolder; border-bottom:1px solid white"> تماس با ما </li>
            <li><a href="#">تلفن: 02188888888</a></li>
            <li><a href="#">ایمیل: info@berelian.com</a></li>
            <li><a href="#">آدرس: تهران - سیدخندان - مجتمع برلیان</a></li>
        </ul>
    </div>
</footer>
</body>
</html>
