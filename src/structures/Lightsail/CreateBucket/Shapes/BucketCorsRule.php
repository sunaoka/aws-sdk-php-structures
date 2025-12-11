<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property list<string> $allowedMethods
 * @property list<string> $allowedOrigins
 * @property list<string>|null $allowedHeaders
 * @property list<string>|null $exposeHeaders
 * @property int|null $maxAgeSeconds
 */
class BucketCorsRule extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     allowedMethods: list<string>,
     *     allowedOrigins: list<string>,
     *     allowedHeaders?: list<string>|null,
     *     exposeHeaders?: list<string>|null,
     *     maxAgeSeconds?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
