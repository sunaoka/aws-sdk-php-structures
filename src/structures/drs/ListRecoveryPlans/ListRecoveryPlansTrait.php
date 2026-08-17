<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlans;

trait ListRecoveryPlansTrait
{
    /**
     * @param ListRecoveryPlansRequest $args
     * @return ListRecoveryPlansResponse
     */
    public function listRecoveryPlans(ListRecoveryPlansRequest $args)
    {
        $result = parent::listRecoveryPlans($args->toArray());
        return new ListRecoveryPlansResponse($result->toArray());
    }
}
