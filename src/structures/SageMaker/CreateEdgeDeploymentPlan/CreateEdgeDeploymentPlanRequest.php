<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgeDeploymentPlanName
 * @property list<Shapes\EdgeDeploymentModelConfig> $ModelConfigs
 * @property string $DeviceFleetName
 * @property list<Shapes\DeploymentStage>|null $Stages
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateEdgeDeploymentPlanRequest extends Request
{
    /**
     * @param array{
     *     EdgeDeploymentPlanName: string,
     *     ModelConfigs: list<Shapes\EdgeDeploymentModelConfig>,
     *     DeviceFleetName: string,
     *     Stages?: list<Shapes\DeploymentStage>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
