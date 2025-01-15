<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ScheduleRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $jobTimeoutMinutes
 * @property bool|null $accountsCleanup
 * @property bool|null $appPackagesCleanup
 * @property bool|null $videoCapture
 * @property bool|null $skipAppResign
 */
class ExecutionConfiguration extends Shape
{
    /**
     * @param array{
     *     jobTimeoutMinutes?: int|null,
     *     accountsCleanup?: bool|null,
     *     appPackagesCleanup?: bool|null,
     *     videoCapture?: bool|null,
     *     skipAppResign?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
