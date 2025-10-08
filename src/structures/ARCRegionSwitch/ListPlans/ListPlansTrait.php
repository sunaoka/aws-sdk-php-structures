<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListPlans;

trait ListPlansTrait
{
    /**
     * @param ListPlansRequest $args
     * @return ListPlansResponse
     */
    public function listPlans(ListPlansRequest $args)
    {
        $result = parent::listPlans($args->toArray());
        return new ListPlansResponse($result->toArray());
    }
}
