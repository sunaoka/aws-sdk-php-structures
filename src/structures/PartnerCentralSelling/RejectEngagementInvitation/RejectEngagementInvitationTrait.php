<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\RejectEngagementInvitation;

trait RejectEngagementInvitationTrait
{
    /**
     * @param RejectEngagementInvitationRequest $args
     * @return void
     */
    public function rejectEngagementInvitation(RejectEngagementInvitationRequest $args)
    {
        parent::rejectEngagementInvitation($args->toArray());
    }
}
