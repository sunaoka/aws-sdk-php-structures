<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 750> $MaxCandidates
 * @property int<1, max> $MaxRuntimePerTrainingJobInSeconds
 * @property int<1, max> $MaxAutoMLJobRuntimeInSeconds
 */
class AutoMLJobCompletionCriteria extends Shape
{
    /**
     * @param array{
     *     MaxCandidates?: int<1, 750>,
     *     MaxRuntimePerTrainingJobInSeconds?: int<1, max>,
     *     MaxAutoMLJobRuntimeInSeconds?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
