<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionId
 * @property string $description
 * @property array<string, string> $parameters
 * @property array<string, string> $targets
 * @property list<string> $startAfter
 * @property ExperimentActionState $state
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class ExperimentAction extends Shape
{
    /**
     * @param array{
     *     actionId?: string,
     *     description?: string,
     *     parameters?: array<string, string>,
     *     targets?: array<string, string>,
     *     startAfter?: list<string>,
     *     state?: ExperimentActionState,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
