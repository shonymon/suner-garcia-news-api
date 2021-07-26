<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($news['articles'] as $article)
    <div class="col">
        <div class="card">
            <img src="{{$article['urlToImage']}}" class="card-img-top" alt="{{$article['title']}}">
            <div class="card-body">
                <h5 class="card-title">{{$article['title']}}</h5>
                <p class="card-text">{{$article['description']}}</p>
                <p class="card-text"><small class="text-muted">{{$article['author']}}</small></p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<br><br>

<nav>
    <ul class="pagination">
        @if (NewsApi::hasPrev($news['page']))
        <li class="page-item"><a class="page-link" href="{{route('noticias')}}?page={{$news['page'] - 1}}&search={{$news['search']}}">Anterior</a></li>
        @else
        <li class="page-item disabled"><a class="page-link">Anterior</a></li>
        @endif

        @if (NewsApi::hasNext($news['page'], $news['perPage'], $news['totalResults']))
        <li class="page-item"><a class="page-link" href="{{route('noticias')}}?page={{$news['page'] + 1}}&search={{$news['search']}}">Siguiente</a></li>
        @else
        <li class="page-item disabled"><a class="page-link">Siguiente</a></li>
        @endif
    </ul>
</nav>

