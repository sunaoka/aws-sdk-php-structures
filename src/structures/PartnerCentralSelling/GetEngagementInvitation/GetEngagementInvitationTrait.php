<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation;

trait GetEngagementInvitationTrait
{
    /**
     * @param GetEngagementInvitationRequest $args
     * @return GetEngagementInvitationResponse
     */
    public function getEngagementInvitation(GetEngagementInvitationRequest $args)
    {
        $result = parent::getEngagementInvitation($args->toArray());
        return new GetEngagementInvitationResponse($result->toArray());
    }
}
