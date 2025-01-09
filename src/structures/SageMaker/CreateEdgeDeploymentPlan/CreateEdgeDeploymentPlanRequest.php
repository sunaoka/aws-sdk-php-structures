<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgeDeploymentPlanName
 * @property list<Shapes\EdgeDeploymentModelConfig> $ModelConfigs
 * @property string $DeviceFleetName
 * @property list<Shapes\DeploymentStage> $Stages
 * @property list<Shapes\Tag> $Tags
 */
class CreateEdgeDeploymentPlanRequest extends Request
{
    /**
     * @param array{
     *     EdgeDeploymentPlanName: string,
     *     ModelConfigs: list<Shapes\EdgeDeploymentModelConfig>,
     *     DeviceFleetName: string,
     *     Stages?: list<Shapes\DeploymentStage>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
