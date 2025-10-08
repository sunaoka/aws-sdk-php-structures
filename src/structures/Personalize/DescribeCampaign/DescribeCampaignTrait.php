<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeCampaign;

trait DescribeCampaignTrait
{
    /**
     * @param DescribeCampaignRequest $args
     * @return DescribeCampaignResponse
     */
    public function describeCampaign(DescribeCampaignRequest $args)
    {
        $result = parent::describeCampaign($args->toArray());
        return new DescribeCampaignResponse($result->toArray());
    }
}
