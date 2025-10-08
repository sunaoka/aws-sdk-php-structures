<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgeDeploymentPlan;

trait CreateEdgeDeploymentPlanTrait
{
    /**
     * @param CreateEdgeDeploymentPlanRequest $args
     * @return CreateEdgeDeploymentPlanResponse
     */
    public function createEdgeDeploymentPlan(CreateEdgeDeploymentPlanRequest $args)
    {
        $result = parent::createEdgeDeploymentPlan($args->toArray());
        return new CreateEdgeDeploymentPlanResponse($result->toArray());
    }
}
