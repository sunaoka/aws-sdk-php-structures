<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $option
 * @property list<string> $queryStringsAllowList
 */
class QueryStringObject extends Shape
{
    /**
     * @param array{
     *     option?: bool,
     *     queryStringsAllowList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
