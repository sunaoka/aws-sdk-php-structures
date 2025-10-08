<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListPlansInRegion;

trait ListPlansInRegionTrait
{
    /**
     * @param ListPlansInRegionRequest $args
     * @return ListPlansInRegionResponse
     */
    public function listPlansInRegion(ListPlansInRegionRequest $args)
    {
        $result = parent::listPlansInRegion($args->toArray());
        return new ListPlansInRegionResponse($result->toArray());
    }
}
