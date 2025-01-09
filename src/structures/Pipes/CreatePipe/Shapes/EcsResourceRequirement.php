<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GPU'|'InferenceAccelerator' $type
 * @property string $value
 */
class EcsResourceRequirement extends Shape
{
    /**
     * @param array{
     *     type: 'GPU'|'InferenceAccelerator',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
