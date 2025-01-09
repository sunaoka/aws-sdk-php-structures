<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketCors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ID
 * @property list<string> $AllowedHeaders
 * @property list<string> $AllowedMethods
 * @property list<string> $AllowedOrigins
 * @property list<string> $ExposeHeaders
 * @property int $MaxAgeSeconds
 */
class CORSRule extends Shape
{
    /**
     * @param array{
     *     ID?: string,
     *     AllowedHeaders?: list<string>,
     *     AllowedMethods: list<string>,
     *     AllowedOrigins: list<string>,
     *     ExposeHeaders?: list<string>,
     *     MaxAgeSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
