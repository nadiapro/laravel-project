<aside>
    <div id="div3">
    <ul>
        <li style="background-color: #7397ce">مقالات</li>
        @foreach ($articles as $article)
        <li><a href="{{ route('article' , ['id' => $article->id]) }}"> {{ $article->title }} </a></li>
        @endforeach
    </ul>
    </div>
    <div id="div4">
        <form method="post">
            @csrf
            <input type="text" name="name" value="{{ old('name')}}" placeholder="لطفا نام خود را وارد نمایید">
            @error('name') <span style="color:red"> لطفا نام خود را وارد نمایید </span> @enderror
            <input type="email" name="email" value="{{ old('email')}}" placeholder="لطفا ایمیل خود را وارد نمایید">
            @error('email') <span style="color:red"> لطفا ایمیل خود را وارد نمایید </span> @enderror
            <button type="submit" style="text-align:center; font-size:18px; width:100%; margin-bottom:2%; margin-top:2%; background-color: rgb(38, 184, 116); padding: 2%; color:#f7fafc">عضویت در خبرنامه</button>
        </form>
    </div>
    <div id="div5">
        <h4>درباره ما</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta doloremque molestiae voluptatum doloribus sed hic ea odit voluptate itaque, repudiandae reiciendis explicabo eius deleniti, sapiente possimus. Perspiciatis beatae asperiores cupiditate.
        </p>
    </div>
</aside>
</div>
