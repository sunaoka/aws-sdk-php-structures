<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteEdgeDeploymentPlan;

trait DeleteEdgeDeploymentPlanTrait
{
    /**
     * @param DeleteEdgeDeploymentPlanRequest $args
     * @return void
     */
    public function deleteEdgeDeploymentPlan(DeleteEdgeDeploymentPlanRequest $args)
    {
        parent::deleteEdgeDeploymentPlan($args->toArray());
    }
}
