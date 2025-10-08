<?php

namespace Sunaoka\Aws\Structures\SesV2\PutDeliverabilityDashboardOption;

trait PutDeliverabilityDashboardOptionTrait
{
    /**
     * @param PutDeliverabilityDashboardOptionRequest $args
     * @return PutDeliverabilityDashboardOptionResponse
     */
    public function putDeliverabilityDashboardOption(PutDeliverabilityDashboardOptionRequest $args)
    {
        $result = parent::putDeliverabilityDashboardOption($args->toArray());
        return new PutDeliverabilityDashboardOptionResponse($result->toArray());
    }
}
