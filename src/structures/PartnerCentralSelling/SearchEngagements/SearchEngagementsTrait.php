<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\SearchEngagements;

trait SearchEngagementsTrait
{
    /**
     * @param SearchEngagementsRequest $args
     * @return SearchEngagementsResponse
     */
    public function searchEngagements(SearchEngagementsRequest $args)
    {
        $result = parent::searchEngagements($args->toArray());
        return new SearchEngagementsResponse($result->toArray());
    }
}
