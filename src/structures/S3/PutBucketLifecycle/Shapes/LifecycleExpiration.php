<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property int|null $Days
 * @property bool|null $ExpiredObjectDeleteMarker
 */
class LifecycleExpiration extends Shape
{
    /**
     * @param array{
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     Days?: int|null,
     *     ExpiredObjectDeleteMarker?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
