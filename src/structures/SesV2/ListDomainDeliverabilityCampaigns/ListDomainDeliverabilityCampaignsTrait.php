<?php

namespace Sunaoka\Aws\Structures\SesV2\ListDomainDeliverabilityCampaigns;

trait ListDomainDeliverabilityCampaignsTrait
{
    /**
     * @param ListDomainDeliverabilityCampaignsRequest $args
     * @return ListDomainDeliverabilityCampaignsResponse
     */
    public function listDomainDeliverabilityCampaigns(ListDomainDeliverabilityCampaignsRequest $args)
    {
        $result = parent::listDomainDeliverabilityCampaigns($args->toArray());
        return new ListDomainDeliverabilityCampaignsResponse($result->toArray());
    }
}
