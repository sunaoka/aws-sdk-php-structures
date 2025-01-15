<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $option
 * @property list<string>|null $queryStringsAllowList
 */
class QueryStringObject extends Shape
{
    /**
     * @param array{
     *     option?: bool|null,
     *     queryStringsAllowList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
