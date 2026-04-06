<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion;

trait GetPlanInRegionTrait
{
    /**
     * @param GetPlanInRegionRequest $args
     * @return GetPlanInRegionResponse
     */
    public function getPlanInRegion(GetPlanInRegionRequest $args)
    {
        $result = parent::getPlanInRegion($args->toArray());
        return new GetPlanInRegionResponse($result->toArray());
    }
}
