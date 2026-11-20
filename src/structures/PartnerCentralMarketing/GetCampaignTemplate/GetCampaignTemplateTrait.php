<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignTemplate;

trait GetCampaignTemplateTrait
{
    /**
     * @param GetCampaignTemplateRequest $args
     * @return GetCampaignTemplateResponse
     */
    public function getCampaignTemplate(GetCampaignTemplateRequest $args)
    {
        $result = parent::getCampaignTemplate($args->toArray());
        return new GetCampaignTemplateResponse($result->toArray());
    }
}
