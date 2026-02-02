<?php

namespace Sunaoka\Aws\Structures\SesV2\GetEmailAddressInsights;

trait GetEmailAddressInsightsTrait
{
    /**
     * @param GetEmailAddressInsightsRequest $args
     * @return GetEmailAddressInsightsResponse
     */
    public function getEmailAddressInsights(GetEmailAddressInsightsRequest $args)
    {
        $result = parent::getEmailAddressInsights($args->toArray());
        return new GetEmailAddressInsightsResponse($result->toArray());
    }
}
