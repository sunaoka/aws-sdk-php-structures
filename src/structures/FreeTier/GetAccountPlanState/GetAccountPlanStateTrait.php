<?php

namespace Sunaoka\Aws\Structures\FreeTier\GetAccountPlanState;

trait GetAccountPlanStateTrait
{
    /**
     * @param GetAccountPlanStateRequest $args
     * @return GetAccountPlanStateResponse
     */
    public function getAccountPlanState(GetAccountPlanStateRequest $args)
    {
        $result = parent::getAccountPlanState($args->toArray());
        return new GetAccountPlanStateResponse($result->toArray());
    }
}
