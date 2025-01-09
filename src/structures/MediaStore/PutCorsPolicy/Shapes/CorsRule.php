<?php

namespace Sunaoka\Aws\Structures\MediaStore\PutCorsPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowedOrigins
 * @property list<'PUT'|'GET'|'DELETE'|'HEAD'> $AllowedMethods
 * @property list<string> $AllowedHeaders
 * @property int $MaxAgeSeconds
 * @property list<string> $ExposeHeaders
 */
class CorsRule extends Shape
{
    /**
     * @param array{
     *     AllowedOrigins: list<string>,
     *     AllowedMethods?: list<'PUT'|'GET'|'DELETE'|'HEAD'>,
     *     AllowedHeaders: list<string>,
     *     MaxAgeSeconds?: int,
     *     ExposeHeaders?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
