<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStageDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EdgeDeploymentPlanArn
 * @property string $EdgeDeploymentPlanName
 * @property string $StageName
 * @property string $DeployedStageName
 * @property string $DeviceFleetName
 * @property string $DeviceName
 * @property string $DeviceArn
 * @property 'READYTODEPLOY'|'INPROGRESS'|'DEPLOYED'|'FAILED'|'STOPPING'|'STOPPED' $DeviceDeploymentStatus
 * @property string $DeviceDeploymentStatusMessage
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $DeploymentStartTime
 */
class DeviceDeploymentSummary extends Shape
{
    /**
     * @param array{
     *     EdgeDeploymentPlanArn: string,
     *     EdgeDeploymentPlanName: string,
     *     StageName: string,
     *     DeployedStageName?: string,
     *     DeviceFleetName?: string,
     *     DeviceName: string,
     *     DeviceArn: string,
     *     DeviceDeploymentStatus?: 'READYTODEPLOY'|'INPROGRESS'|'DEPLOYED'|'FAILED'|'STOPPING'|'STOPPED',
     *     DeviceDeploymentStatusMessage?: string,
     *     Description?: string,
     *     DeploymentStartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
