<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunctionUrlConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowCredentials
 * @property list<string> $AllowHeaders
 * @property list<string> $AllowMethods
 * @property list<string> $AllowOrigins
 * @property list<string> $ExposeHeaders
 * @property int<0, 86400> $MaxAge
 */
class Cors extends Shape
{
    /**
     * @param array{
     *     AllowCredentials?: bool,
     *     AllowHeaders?: list<string>,
     *     AllowMethods?: list<string>,
     *     AllowOrigins?: list<string>,
     *     ExposeHeaders?: list<string>,
     *     MaxAge?: int<0, 86400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
