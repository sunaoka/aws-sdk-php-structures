<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchOpportunities;

trait SearchOpportunitiesTrait
{
    /**
     * @param SearchOpportunitiesRequest $args
     * @return SearchOpportunitiesResponse
     */
    public function searchOpportunities(SearchOpportunitiesRequest $args)
    {
        $result = parent::searchOpportunities($args->toArray());
        return new SearchOpportunitiesResponse($result->toArray());
    }
}
