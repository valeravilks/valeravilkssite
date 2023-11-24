{{--
  Template Name: Design System

  TODO: Create rooting for this page
--}}

@extends('layouts.app')

<div>
  <x-atoms.example/>
  <x-atoms.docs-commets.index :class="App\View\Components\Atoms\Example::class"/>
</div>

@foreach($mockHeaders as $text)
  <x-atoms.headers>
    {{ $text }}
  </x-atoms.headers>
@endforeach

<x-atoms.headers tag="2">
  Tag 2
</x-atoms.headers>
<x-atoms.headers tag="2" styles="3">
  Tag 2 Style 3
</x-atoms.headers>
<x-atoms.headers tag="2" styles="5">
  Tag 2 Style 3
</x-atoms.headers>
<x-atoms.docs-commets.index :class="App\View\Components\Atoms\Headers::class"/>
