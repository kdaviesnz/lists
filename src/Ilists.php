<?php

namespace kdaviesnz\utilities;

interface Ilists {
	public function map(callable $callback):object;
	public function filter(callable $callback):object;
	public function foldl(callable $callback);
	public function foldr(callable $callback);
}