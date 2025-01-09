<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Serial'|'Direct' $Mode
 */
class InferenceExecutionConfig extends Shape
{
    /**
     * @param array{Mode: 'Serial'|'Direct'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
