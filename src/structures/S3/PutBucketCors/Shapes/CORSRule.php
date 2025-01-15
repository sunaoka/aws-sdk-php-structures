<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketCors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ID
 * @property list<string>|null $AllowedHeaders
 * @property list<string> $AllowedMethods
 * @property list<string> $AllowedOrigins
 * @property list<string>|null $ExposeHeaders
 * @property int|null $MaxAgeSeconds
 */
class CORSRule extends Shape
{
    /**
     * @param array{
     *     ID?: string|null,
     *     AllowedHeaders?: list<string>|null,
     *     AllowedMethods: list<string>,
     *     AllowedOrigins: list<string>,
     *     ExposeHeaders?: list<string>|null,
     *     MaxAgeSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
