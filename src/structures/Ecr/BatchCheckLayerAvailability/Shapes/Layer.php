<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchCheckLayerAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $layerDigest
 * @property 'AVAILABLE'|'UNAVAILABLE'|'ARCHIVED'|null $layerAvailability
 * @property int|null $layerSize
 * @property string|null $mediaType
 */
class Layer extends Shape
{
    /**
     * @param array{
     *     layerDigest?: string|null,
     *     layerAvailability?: 'AVAILABLE'|'UNAVAILABLE'|'ARCHIVED'|null,
     *     layerSize?: int|null,
     *     mediaType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
