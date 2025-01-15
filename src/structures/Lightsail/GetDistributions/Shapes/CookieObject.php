<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'allow-list'|'all'|null $option
 * @property list<string>|null $cookiesAllowList
 */
class CookieObject extends Shape
{
    /**
     * @param array{
     *     option?: 'none'|'allow-list'|'all'|null,
     *     cookiesAllowList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
