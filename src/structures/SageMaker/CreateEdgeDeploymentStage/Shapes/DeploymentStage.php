<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StageName
 * @property DeviceSelectionConfig $DeviceSelectionConfig
 * @property EdgeDeploymentConfig|null $DeploymentConfig
 */
class DeploymentStage extends Shape
{
    /**
     * @param array{
     *     StageName: string,
     *     DeviceSelectionConfig: DeviceSelectionConfig,
     *     DeploymentConfig?: EdgeDeploymentConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
