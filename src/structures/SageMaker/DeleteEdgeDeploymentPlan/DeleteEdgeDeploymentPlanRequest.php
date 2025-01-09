<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEdgeDeploymentPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgeDeploymentPlanName
 */
class DeleteEdgeDeploymentPlanRequest extends Request
{
    /**
     * @param array{EdgeDeploymentPlanName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
