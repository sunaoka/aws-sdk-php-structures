<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListRoute53HealthChecksInRegion;

trait ListRoute53HealthChecksInRegionTrait
{
    /**
     * @param ListRoute53HealthChecksInRegionRequest $args
     * @return ListRoute53HealthChecksInRegionResponse
     */
    public function listRoute53HealthChecksInRegion(ListRoute53HealthChecksInRegionRequest $args)
    {
        $result = parent::listRoute53HealthChecksInRegion($args->toArray());
        return new ListRoute53HealthChecksInRegionResponse($result->toArray());
    }
}
