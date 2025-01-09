<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $keyPrefix
 */
class S3DestinationConfig extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     keyPrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
