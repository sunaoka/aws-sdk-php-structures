<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AllowOrigins
 * @property bool|null $AllowCredentials
 * @property list<string>|null $ExposeHeaders
 * @property int|null $MaxAge
 * @property list<string>|null $AllowMethods
 * @property list<string>|null $AllowHeaders
 */
class AwsCorsConfiguration extends Shape
{
    /**
     * @param array{
     *     AllowOrigins?: list<string>|null,
     *     AllowCredentials?: bool|null,
     *     ExposeHeaders?: list<string>|null,
     *     MaxAge?: int|null,
     *     AllowMethods?: list<string>|null,
     *     AllowHeaders?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
