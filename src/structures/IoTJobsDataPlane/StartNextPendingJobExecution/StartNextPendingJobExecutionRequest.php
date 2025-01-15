<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartNextPendingJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property array<string, string>|null $statusDetails
 * @property int|null $stepTimeoutInMinutes
 */
class StartNextPendingJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     statusDetails?: array<string, string>|null,
     *     stepTimeoutInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
