<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgeDeploymentPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StageName
 * @property DeviceSelectionConfig $DeviceSelectionConfig
 * @property EdgeDeploymentConfig $DeploymentConfig
 * @property EdgeDeploymentStatus $DeploymentStatus
 */
class DeploymentStageStatusSummary extends Shape
{
    /**
     * @param array{
     *     StageName: string,
     *     DeviceSelectionConfig: DeviceSelectionConfig,
     *     DeploymentConfig: EdgeDeploymentConfig,
     *     DeploymentStatus: EdgeDeploymentStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
