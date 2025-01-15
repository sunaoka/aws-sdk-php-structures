<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchCheckLayerAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $layerDigest
 * @property 'InvalidLayerDigest'|'MissingLayerDigest'|null $failureCode
 * @property string|null $failureReason
 */
class LayerFailure extends Shape
{
    /**
     * @param array{
     *     layerDigest?: string|null,
     *     failureCode?: 'InvalidLayerDigest'|'MissingLayerDigest'|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
