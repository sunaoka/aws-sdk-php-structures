<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobObjective|null $AutoMLJobObjective
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression'|null $ProblemType
 * @property AutoMLJobCompletionCriteria|null $CompletionCriteria
 */
class ResolvedAttributes extends Shape
{
    /**
     * @param array{
     *     AutoMLJobObjective?: AutoMLJobObjective|null,
     *     ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression'|null,
     *     CompletionCriteria?: AutoMLJobCompletionCriteria|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
