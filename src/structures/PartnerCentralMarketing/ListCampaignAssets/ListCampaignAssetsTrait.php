<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\ListCampaignAssets;

trait ListCampaignAssetsTrait
{
    /**
     * @param ListCampaignAssetsRequest $args
     * @return ListCampaignAssetsResponse
     */
    public function listCampaignAssets(ListCampaignAssetsRequest $args)
    {
        $result = parent::listCampaignAssets($args->toArray());
        return new ListCampaignAssetsResponse($result->toArray());
    }
}
