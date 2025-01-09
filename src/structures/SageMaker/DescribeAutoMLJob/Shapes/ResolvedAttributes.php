<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobObjective $AutoMLJobObjective
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression' $ProblemType
 * @property AutoMLJobCompletionCriteria $CompletionCriteria
 */
class ResolvedAttributes extends Shape
{
    /**
     * @param array{
     *     AutoMLJobObjective?: AutoMLJobObjective,
     *     ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression',
     *     CompletionCriteria?: AutoMLJobCompletionCriteria
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
