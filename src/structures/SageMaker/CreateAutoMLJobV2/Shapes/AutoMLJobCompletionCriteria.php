<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxCandidates
 * @property int $MaxRuntimePerTrainingJobInSeconds
 * @property int $MaxAutoMLJobRuntimeInSeconds
 */
class AutoMLJobCompletionCriteria extends Shape
{
    /**
     * @param array{
     *     MaxCandidates?: int,
     *     MaxRuntimePerTrainingJobInSeconds?: int,
     *     MaxAutoMLJobRuntimeInSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
