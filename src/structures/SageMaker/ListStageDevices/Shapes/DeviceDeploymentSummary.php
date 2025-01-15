<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListStageDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EdgeDeploymentPlanArn
 * @property string $EdgeDeploymentPlanName
 * @property string $StageName
 * @property string|null $DeployedStageName
 * @property string|null $DeviceFleetName
 * @property string $DeviceName
 * @property string $DeviceArn
 * @property 'READYTODEPLOY'|'INPROGRESS'|'DEPLOYED'|'FAILED'|'STOPPING'|'STOPPED'|null $DeviceDeploymentStatus
 * @property string|null $DeviceDeploymentStatusMessage
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $DeploymentStartTime
 */
class DeviceDeploymentSummary extends Shape
{
    /**
     * @param array{
     *     EdgeDeploymentPlanArn: string,
     *     EdgeDeploymentPlanName: string,
     *     StageName: string,
     *     DeployedStageName?: string|null,
     *     DeviceFleetName?: string|null,
     *     DeviceName: string,
     *     DeviceArn: string,
     *     DeviceDeploymentStatus?: 'READYTODEPLOY'|'INPROGRESS'|'DEPLOYED'|'FAILED'|'STOPPING'|'STOPPED'|null,
     *     DeviceDeploymentStatusMessage?: string|null,
     *     Description?: string|null,
     *     DeploymentStartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
