<!-- Estendo il Layout "base" del mio file layout app.blade.php
@extends('Supercars/layouts.app')

<!-- Sostituisco, dove nel mio layout base (app.blade.php) c'è uno yield ('title') con questo codice -->
@section('title', 'Supercars Showcase')

<!-- Dove nel mio layout base (app.blade.php) c'è uno yield 'content' aggiungo questo codice -->
@section('content')
<h2>Benvenuto nella home</h2>
@endsection
