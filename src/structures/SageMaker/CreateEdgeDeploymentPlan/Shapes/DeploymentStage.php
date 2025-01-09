<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StageName
 * @property DeviceSelectionConfig $DeviceSelectionConfig
 * @property EdgeDeploymentConfig $DeploymentConfig
 */
class DeploymentStage extends Shape
{
    /**
     * @param array{
     *     StageName: string,
     *     DeviceSelectionConfig: DeviceSelectionConfig,
     *     DeploymentConfig?: EdgeDeploymentConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
