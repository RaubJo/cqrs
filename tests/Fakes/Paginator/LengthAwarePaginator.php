<?php

declare(strict_types=1);

namespace ArtisanSdk\CQRS\Tests\Fakes\Paginator;

use Illuminate\Contracts\Pagination\LengthAwarePaginator as Contract;

class LengthAwarePaginator implements Contract
{
    public function getUrlRange($start, $end) {}

    public function total() {}

    public function lastPage() {}

    public function url($page) {}

    public function appends($key, $value = null) {}

    public function fragment($fragment = null) {}

    public function nextPageUrl() {}

    public function previousPageUrl() {}

    public function items() {}

    public function firstItem() {}

    public function lastItem() {}

    public function perPage() {}

    public function currentPage() {}

    public function hasPages() {}

    public function hasMorePages() {}

    public function path() {}

    public function isEmpty() {}

    public function isNotEmpty() {}

    public function render($view = null, $data = []) {}
}
