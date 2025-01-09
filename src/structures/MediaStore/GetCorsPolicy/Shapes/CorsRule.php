<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetCorsPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowedOrigins
 * @property list<'PUT'|'GET'|'DELETE'|'HEAD'> $AllowedMethods
 * @property list<string> $AllowedHeaders
 * @property int<0, 2147483647> $MaxAgeSeconds
 * @property list<string> $ExposeHeaders
 */
class CorsRule extends Shape
{
    /**
     * @param array{
     *     AllowedOrigins: list<string>,
     *     AllowedMethods?: list<'PUT'|'GET'|'DELETE'|'HEAD'>,
     *     AllowedHeaders: list<string>,
     *     MaxAgeSeconds?: int<0, 2147483647>,
     *     ExposeHeaders?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
