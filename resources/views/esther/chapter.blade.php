<h1>{{ $BIBLE_VERSION }}</h1>
<h2>{{ $BOOK_NAME }}</h2>
<h3>Chapter {{ $chapter_number }}</h3>
<pre>
@include('esther.chapter' . $chapter_number)
</pre>