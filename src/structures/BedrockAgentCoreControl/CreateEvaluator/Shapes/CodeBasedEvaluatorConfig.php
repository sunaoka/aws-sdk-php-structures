<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateEvaluator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LambdaEvaluatorConfig|null $lambdaConfig
 */
class CodeBasedEvaluatorConfig extends Shape
{
    /**
     * @param array{lambdaConfig?: LambdaEvaluatorConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
