<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities;

trait ListOpportunitiesTrait
{
    /**
     * @param ListOpportunitiesRequest $args
     * @return ListOpportunitiesResponse
     */
    public function listOpportunities(ListOpportunitiesRequest $args)
    {
        $result = parent::listOpportunities($args->toArray());
        return new ListOpportunitiesResponse($result->toArray());
    }
}
