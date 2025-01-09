<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property string $metadataKey
 */
class S3Destination extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     key?: string,
     *     metadataKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
