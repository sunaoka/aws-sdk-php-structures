<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoMLJobObjective|null $AutoMLJobObjective
 * @property AutoMLJobCompletionCriteria|null $CompletionCriteria
 * @property AutoMLProblemTypeResolvedAttributes|null $AutoMLProblemTypeResolvedAttributes
 */
class AutoMLResolvedAttributes extends Shape
{
    /**
     * @param array{
     *     AutoMLJobObjective?: AutoMLJobObjective|null,
     *     CompletionCriteria?: AutoMLJobCompletionCriteria|null,
     *     AutoMLProblemTypeResolvedAttributes?: AutoMLProblemTypeResolvedAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
