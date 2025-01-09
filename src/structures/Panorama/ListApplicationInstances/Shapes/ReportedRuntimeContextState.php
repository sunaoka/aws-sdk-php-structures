<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'STOPPED'|'REMOVED' $DesiredState
 * @property 'STOPPING'|'STOPPED'|'STOP_ERROR'|'REMOVAL_FAILED'|'REMOVAL_IN_PROGRESS'|'STARTING'|'RUNNING'|'INSTALL_ERROR'|'LAUNCHED'|'LAUNCH_ERROR'|'INSTALL_IN_PROGRESS' $DeviceReportedStatus
 * @property \Aws\Api\DateTimeResult $DeviceReportedTime
 * @property string $RuntimeContextName
 */
class ReportedRuntimeContextState extends Shape
{
    /**
     * @param array{
     *     DesiredState: 'RUNNING'|'STOPPED'|'REMOVED',
     *     DeviceReportedStatus: 'STOPPING'|'STOPPED'|'STOP_ERROR'|'REMOVAL_FAILED'|'REMOVAL_IN_PROGRESS'|'STARTING'|'RUNNING'|'INSTALL_ERROR'|'LAUNCHED'|'LAUNCH_ERROR'|'INSTALL_IN_PROGRESS',
     *     DeviceReportedTime: \Aws\Api\DateTimeResult,
     *     RuntimeContextName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
