<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgeDeploymentPlanName
 * @property list<Shapes\DeploymentStage> $Stages
 */
class CreateEdgeDeploymentStageRequest extends Request
{
    /**
     * @param array{
     *     EdgeDeploymentPlanName: string,
     *     Stages: list<Shapes\DeploymentStage>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
