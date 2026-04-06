<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\UpdateCampaignFlowAssociation;

trait UpdateCampaignFlowAssociationTrait
{
    /**
     * @param UpdateCampaignFlowAssociationRequest $args
     * @return void
     */
    public function updateCampaignFlowAssociation(UpdateCampaignFlowAssociationRequest $args)
    {
        parent::updateCampaignFlowAssociation($args->toArray());
    }
}
