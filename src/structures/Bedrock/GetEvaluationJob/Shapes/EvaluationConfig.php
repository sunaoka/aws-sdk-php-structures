<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedEvaluationConfig $automated
 * @property HumanEvaluationConfig $human
 */
class EvaluationConfig extends Shape
{
    /**
     * @param array{
     *     automated?: AutomatedEvaluationConfig,
     *     human?: HumanEvaluationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
