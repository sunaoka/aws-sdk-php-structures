<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchCheckLayerAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $layerDigest
 * @property 'AVAILABLE'|'UNAVAILABLE' $layerAvailability
 * @property int $layerSize
 * @property string $mediaType
 */
class Layer extends Shape
{
    /**
     * @param array{
     *     layerDigest?: string,
     *     layerAvailability?: 'AVAILABLE'|'UNAVAILABLE',
     *     layerSize?: int,
     *     mediaType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
