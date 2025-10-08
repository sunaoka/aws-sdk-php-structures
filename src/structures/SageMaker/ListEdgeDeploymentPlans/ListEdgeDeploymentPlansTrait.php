<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgeDeploymentPlans;

trait ListEdgeDeploymentPlansTrait
{
    /**
     * @param ListEdgeDeploymentPlansRequest $args
     * @return ListEdgeDeploymentPlansResponse
     */
    public function listEdgeDeploymentPlans(ListEdgeDeploymentPlansRequest $args)
    {
        $result = parent::listEdgeDeploymentPlans($args->toArray());
        return new ListEdgeDeploymentPlansResponse($result->toArray());
    }
}
