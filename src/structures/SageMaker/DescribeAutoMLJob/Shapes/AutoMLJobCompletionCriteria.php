<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 750>|null $MaxCandidates
 * @property int<1, max>|null $MaxRuntimePerTrainingJobInSeconds
 * @property int<1, max>|null $MaxAutoMLJobRuntimeInSeconds
 */
class AutoMLJobCompletionCriteria extends Shape
{
    /**
     * @param array{
     *     MaxCandidates?: int<1, 750>|null,
     *     MaxRuntimePerTrainingJobInSeconds?: int<1, max>|null,
     *     MaxAutoMLJobRuntimeInSeconds?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
