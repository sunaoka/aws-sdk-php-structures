<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteCampaign;

trait DeleteCampaignTrait
{
    /**
     * @param DeleteCampaignRequest $args
     * @return DeleteCampaignResponse
     */
    public function deleteCampaign(DeleteCampaignRequest $args)
    {
        $result = parent::deleteCampaign($args->toArray());
        return new DeleteCampaignResponse($result->toArray());
    }
}
