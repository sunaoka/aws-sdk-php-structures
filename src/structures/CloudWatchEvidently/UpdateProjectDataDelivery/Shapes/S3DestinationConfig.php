<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProjectDataDelivery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $prefix
 */
class S3DestinationConfig extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
