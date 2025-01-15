<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutCorsPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowedOrigins
 * @property list<'PUT'|'GET'|'DELETE'|'HEAD'>|null $AllowedMethods
 * @property list<string> $AllowedHeaders
 * @property int<0, 2147483647>|null $MaxAgeSeconds
 * @property list<string>|null $ExposeHeaders
 */
class CorsRule extends Shape
{
    /**
     * @param array{
     *     AllowedOrigins: list<string>,
     *     AllowedMethods?: list<'PUT'|'GET'|'DELETE'|'HEAD'>|null,
     *     AllowedHeaders: list<string>,
     *     MaxAgeSeconds?: int<0, 2147483647>|null,
     *     ExposeHeaders?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
