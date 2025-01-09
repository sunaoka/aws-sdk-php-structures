<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'allow-list'|'all' $option
 * @property list<string> $cookiesAllowList
 */
class CookieObject extends Shape
{
    /**
     * @param array{
     *     option?: 'none'|'allow-list'|'all',
     *     cookiesAllowList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
