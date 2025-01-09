<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string $appArn
 * @property string $devicePoolArn
 * @property Shapes\DeviceSelectionConfiguration $deviceSelectionConfiguration
 * @property string $name
 * @property Shapes\ScheduleRunTest $test
 * @property Shapes\ScheduleRunConfiguration $configuration
 * @property Shapes\ExecutionConfiguration $executionConfiguration
 */
class ScheduleRunRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     appArn?: string,
     *     devicePoolArn?: string,
     *     deviceSelectionConfiguration?: Shapes\DeviceSelectionConfiguration,
     *     name?: string,
     *     test: Shapes\ScheduleRunTest,
     *     configuration?: Shapes\ScheduleRunConfiguration,
     *     executionConfiguration?: Shapes\ExecutionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
