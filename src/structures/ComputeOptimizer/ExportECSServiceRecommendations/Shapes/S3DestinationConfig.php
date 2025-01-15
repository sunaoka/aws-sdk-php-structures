<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $keyPrefix
 */
class S3DestinationConfig extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     keyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
