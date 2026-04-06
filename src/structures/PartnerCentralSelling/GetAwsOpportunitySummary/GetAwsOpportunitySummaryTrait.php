<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary;

trait GetAwsOpportunitySummaryTrait
{
    /**
     * @param GetAwsOpportunitySummaryRequest $args
     * @return GetAwsOpportunitySummaryResponse
     */
    public function getAwsOpportunitySummary(GetAwsOpportunitySummaryRequest $args)
    {
        $result = parent::getAwsOpportunitySummary($args->toArray());
        return new GetAwsOpportunitySummaryResponse($result->toArray());
    }
}
