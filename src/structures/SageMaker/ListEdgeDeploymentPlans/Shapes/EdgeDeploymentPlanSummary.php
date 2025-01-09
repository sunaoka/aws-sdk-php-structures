<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgeDeploymentPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EdgeDeploymentPlanArn
 * @property string $EdgeDeploymentPlanName
 * @property string $DeviceFleetName
 * @property int $EdgeDeploymentSuccess
 * @property int $EdgeDeploymentPending
 * @property int $EdgeDeploymentFailed
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class EdgeDeploymentPlanSummary extends Shape
{
    /**
     * @param array{
     *     EdgeDeploymentPlanArn: string,
     *     EdgeDeploymentPlanName: string,
     *     DeviceFleetName: string,
     *     EdgeDeploymentSuccess: int,
     *     EdgeDeploymentPending: int,
     *     EdgeDeploymentFailed: int,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
