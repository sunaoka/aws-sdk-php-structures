<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListDataLakes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $regions
 */
class ListDataLakesRequest extends Request
{
    /**
     * @param array{regions?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
