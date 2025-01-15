<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property string|null $appArn
 * @property string|null $devicePoolArn
 * @property Shapes\DeviceSelectionConfiguration|null $deviceSelectionConfiguration
 * @property string|null $name
 * @property Shapes\ScheduleRunTest $test
 * @property Shapes\ScheduleRunConfiguration|null $configuration
 * @property Shapes\ExecutionConfiguration|null $executionConfiguration
 */
class ScheduleRunRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     appArn?: string|null,
     *     devicePoolArn?: string|null,
     *     deviceSelectionConfiguration?: Shapes\DeviceSelectionConfiguration|null,
     *     name?: string|null,
     *     test: Shapes\ScheduleRunTest,
     *     configuration?: Shapes\ScheduleRunConfiguration|null,
     *     executionConfiguration?: Shapes\ExecutionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
