<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $jobTimeoutMinutes
 * @property bool $accountsCleanup
 * @property bool $appPackagesCleanup
 * @property bool $videoCapture
 * @property bool $skipAppResign
 */
class ExecutionConfiguration extends Shape
{
    /**
     * @param array{
     *     jobTimeoutMinutes?: int,
     *     accountsCleanup?: bool,
     *     appPackagesCleanup?: bool,
     *     videoCapture?: bool,
     *     skipAppResign?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
