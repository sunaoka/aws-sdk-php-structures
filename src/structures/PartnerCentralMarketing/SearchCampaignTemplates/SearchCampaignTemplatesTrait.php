<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\SearchCampaignTemplates;

trait SearchCampaignTemplatesTrait
{
    /**
     * @param SearchCampaignTemplatesRequest $args
     * @return SearchCampaignTemplatesResponse
     */
    public function searchCampaignTemplates(SearchCampaignTemplatesRequest $args)
    {
        $result = parent::searchCampaignTemplates($args->toArray());
        return new SearchCampaignTemplatesResponse($result->toArray());
    }
}
