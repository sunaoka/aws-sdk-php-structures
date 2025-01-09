<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property 'GPU'|'InferenceAccelerator' $type
 */
class ResourceRequirement extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     type: 'GPU'|'InferenceAccelerator'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
