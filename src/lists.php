<?php
declare( strict_types=1 );

namespace kdaviesnz\utilities;

class lists implements Ilists {

	private $l = [];


	public function __construct( array $l ) {
		$this->l = $l;
	}

	public function map( callable $callback ): object {
		$l = array_map(
			$callback,
			$this->l
		);

		// In keeping with functional principles return a new object rather than returning $this
		return new lists($l);
	}

	public function filter( callable $callback ): object {
		$l = array_filter(
			$this->l,
			$callback
		);
		return new lists($l);
	}

	public function foldl( callable $callback ) {
		$l = array_reduce(
			$this->l,
			$callback
		);
		return $l;
	}

	public function foldr( callable $callback ) {
		$l = array_reduce(
			array_reverse($this->l),
			$callback
		);
		return $l;
	}

	public function __invoke() {
		return $this->l;
	}
}

