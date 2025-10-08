<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDomainDeliverabilityCampaign;

trait GetDomainDeliverabilityCampaignTrait
{
    /**
     * @param GetDomainDeliverabilityCampaignRequest $args
     * @return GetDomainDeliverabilityCampaignResponse
     */
    public function getDomainDeliverabilityCampaign(GetDomainDeliverabilityCampaignRequest $args)
    {
        $result = parent::getDomainDeliverabilityCampaign($args->toArray());
        return new GetDomainDeliverabilityCampaignResponse($result->toArray());
    }
}
