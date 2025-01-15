<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionUrlConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowCredentials
 * @property list<string>|null $AllowHeaders
 * @property list<string>|null $AllowMethods
 * @property list<string>|null $AllowOrigins
 * @property list<string>|null $ExposeHeaders
 * @property int<0, 86400>|null $MaxAge
 */
class Cors extends Shape
{
    /**
     * @param array{
     *     AllowCredentials?: bool|null,
     *     AllowHeaders?: list<string>|null,
     *     AllowMethods?: list<string>|null,
     *     AllowOrigins?: list<string>|null,
     *     ExposeHeaders?: list<string>|null,
     *     MaxAge?: int<0, 86400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
