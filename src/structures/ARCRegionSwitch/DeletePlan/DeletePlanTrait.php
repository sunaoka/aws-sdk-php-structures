<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\DeletePlan;

trait DeletePlanTrait
{
    /**
     * @param DeletePlanRequest $args
     * @return DeletePlanResponse
     */
    public function deletePlan(DeletePlanRequest $args)
    {
        $result = parent::deletePlan($args->toArray());
        return new DeletePlanResponse($result->toArray());
    }
}
