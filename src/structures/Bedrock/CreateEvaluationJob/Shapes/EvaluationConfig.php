<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedEvaluationConfig|null $automated
 * @property HumanEvaluationConfig|null $human
 */
class EvaluationConfig extends Shape
{
    /**
     * @param array{
     *     automated?: AutomatedEvaluationConfig|null,
     *     human?: HumanEvaluationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
