<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation;

trait CreateEngagementInvitationTrait
{
    /**
     * @param CreateEngagementInvitationRequest $args
     * @return CreateEngagementInvitationResponse
     */
    public function createEngagementInvitation(CreateEngagementInvitationRequest $args)
    {
        $result = parent::createEngagementInvitation($args->toArray());
        return new CreateEngagementInvitationResponse($result->toArray());
    }
}
