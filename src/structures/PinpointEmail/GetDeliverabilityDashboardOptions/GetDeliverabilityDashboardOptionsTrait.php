<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityDashboardOptions;

trait GetDeliverabilityDashboardOptionsTrait
{
    /**
     * @param GetDeliverabilityDashboardOptionsRequest $args
     * @return GetDeliverabilityDashboardOptionsResponse
     */
    public function getDeliverabilityDashboardOptions(GetDeliverabilityDashboardOptionsRequest $args)
    {
        $result = parent::getDeliverabilityDashboardOptions($args->toArray());
        return new GetDeliverabilityDashboardOptionsResponse($result->toArray());
    }
}
