<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListResponsePlans;

trait ListResponsePlansTrait
{
    /**
     * @param ListResponsePlansRequest $args
     * @return ListResponsePlansResponse
     */
    public function listResponsePlans(ListResponsePlansRequest $args)
    {
        $result = parent::listResponsePlans($args->toArray());
        return new ListResponsePlansResponse($result->toArray());
    }
}
