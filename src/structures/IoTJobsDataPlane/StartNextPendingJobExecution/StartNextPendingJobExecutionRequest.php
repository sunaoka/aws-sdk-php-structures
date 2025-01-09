<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartNextPendingJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property array<string, string> $statusDetails
 * @property int $stepTimeoutInMinutes
 */
class StartNextPendingJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     statusDetails?: array<string, string>,
     *     stepTimeoutInMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
