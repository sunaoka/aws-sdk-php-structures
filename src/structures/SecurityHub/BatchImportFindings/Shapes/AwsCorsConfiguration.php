<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowOrigins
 * @property bool $AllowCredentials
 * @property list<string> $ExposeHeaders
 * @property int $MaxAge
 * @property list<string> $AllowMethods
 * @property list<string> $AllowHeaders
 */
class AwsCorsConfiguration extends Shape
{
    /**
     * @param array{
     *     AllowOrigins?: list<string>,
     *     AllowCredentials?: bool,
     *     ExposeHeaders?: list<string>,
     *     MaxAge?: int,
     *     AllowMethods?: list<string>,
     *     AllowHeaders?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
