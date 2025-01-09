<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartEdgeDeploymentStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgeDeploymentPlanName
 * @property string $StageName
 */
class StartEdgeDeploymentStageRequest extends Request
{
    /**
     * @param array{
     *     EdgeDeploymentPlanName: string,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
