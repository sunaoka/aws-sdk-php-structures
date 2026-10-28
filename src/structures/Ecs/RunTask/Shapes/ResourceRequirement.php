<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property 'GPU'|'InferenceAccelerator'|'NeuronDevice' $type
 * @property SharingStrategy|null $sharingStrategy
 */
class ResourceRequirement extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     type: 'GPU'|'InferenceAccelerator'|'NeuronDevice',
     *     sharingStrategy?: SharingStrategy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
