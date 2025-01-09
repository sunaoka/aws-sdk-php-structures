<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $prefix
 */
class S3DestinationConfig extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
