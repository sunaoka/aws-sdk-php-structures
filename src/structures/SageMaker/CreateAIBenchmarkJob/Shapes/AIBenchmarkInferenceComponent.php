<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIBenchmarkJob\Shapes;

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
