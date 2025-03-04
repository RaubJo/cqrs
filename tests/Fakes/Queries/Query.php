<?php

declare(strict_types=1);

namespace ArtisanSdk\CQRS\Tests\Fakes\Queries;

use BadMethodCallException;
use Illuminate\Support\Str;

class Query extends Base
{
    public function run()
    {
        return true;
    }

    public function __call($method, $arguments = [])
    {
        if (substr($method, 0, 4) === 'test') {
            $method = Str::camel(str_replace('test', '', $method));

            return $this->$method(...$arguments);
        }

        throw new BadMethodCallException('Method ' . $method . '() does not exist on ' . __CLASS__ . '.');
    }
}
