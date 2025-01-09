<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Date
 * @property int $Days
 * @property bool $ExpiredObjectDeleteMarker
 */
class LifecycleExpiration extends Shape
{
    /**
     * @param array{
     *     Date?: \Aws\Api\DateTimeResult,
     *     Days?: int,
     *     ExpiredObjectDeleteMarker?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
