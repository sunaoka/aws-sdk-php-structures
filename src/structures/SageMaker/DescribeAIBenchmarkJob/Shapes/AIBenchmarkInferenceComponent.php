<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIBenchmarkJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 */
class AIBenchmarkInferenceComponent extends Shape
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
