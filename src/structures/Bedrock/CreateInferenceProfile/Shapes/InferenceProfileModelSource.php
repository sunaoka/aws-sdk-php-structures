<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateInferenceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $copyFrom
 */
class InferenceProfileModelSource extends Shape
{
    /**
     * @param array{copyFrom?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
