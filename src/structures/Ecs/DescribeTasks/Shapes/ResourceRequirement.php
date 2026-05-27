<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property 'GPU'|'InferenceAccelerator'|'NeuronDevice' $type
 */
class ResourceRequirement extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     type: 'GPU'|'InferenceAccelerator'|'NeuronDevice'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
