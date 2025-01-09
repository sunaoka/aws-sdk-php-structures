<?php

namespace Sunaoka\Aws\Structures\ECRPublic\BatchCheckLayerAvailability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $layerDigest
 * @property 'InvalidLayerDigest'|'MissingLayerDigest' $failureCode
 * @property string $failureReason
 */
class LayerFailure extends Shape
{
    /**
     * @param array{
     *     layerDigest?: string,
     *     failureCode?: 'InvalidLayerDigest'|'MissingLayerDigest',
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
