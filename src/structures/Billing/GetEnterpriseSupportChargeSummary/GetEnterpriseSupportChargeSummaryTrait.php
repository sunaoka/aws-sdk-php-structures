<?php

namespace Sunaoka\Aws\Structures\Billing\GetEnterpriseSupportChargeSummary;

trait GetEnterpriseSupportChargeSummaryTrait
{
    /**
     * @param GetEnterpriseSupportChargeSummaryRequest $args
     * @return GetEnterpriseSupportChargeSummaryResponse
     */
    public function getEnterpriseSupportChargeSummary(GetEnterpriseSupportChargeSummaryRequest $args)
    {
        $result = parent::getEnterpriseSupportChargeSummary($args->toArray());
        return new GetEnterpriseSupportChargeSummaryResponse($result->toArray());
    }
}
