<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $key
 * @property string|null $metadataKey
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     key?: string|null,
     *     metadataKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
