<?php

namespace Sunaoka\Aws\Structures\FIS\StopExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $actionId
 * @property string|null $description
 * @property array<string, string>|null $parameters
 * @property array<string, string>|null $targets
 * @property list<string>|null $startAfter
 * @property ExperimentActionState|null $state
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class ExperimentAction extends Shape
{
    /**
     * @param array{
     *     actionId?: string|null,
     *     description?: string|null,
     *     parameters?: array<string, string>|null,
     *     targets?: array<string, string>|null,
     *     startAfter?: list<string>|null,
     *     state?: ExperimentActionState|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
