<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobObjective $AutoMLJobObjective
 * @property AutoMLJobCompletionCriteria $CompletionCriteria
 * @property AutoMLProblemTypeResolvedAttributes $AutoMLProblemTypeResolvedAttributes
 */
class AutoMLResolvedAttributes extends Shape
{
    /**
     * @param array{
     *     AutoMLJobObjective?: AutoMLJobObjective,
     *     CompletionCriteria?: AutoMLJobCompletionCriteria,
     *     AutoMLProblemTypeResolvedAttributes?: AutoMLProblemTypeResolvedAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
