<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\AcceptEngagementInvitation;

trait AcceptEngagementInvitationTrait
{
    /**
     * @param AcceptEngagementInvitationRequest $args
     * @return void
     */
    public function acceptEngagementInvitation(AcceptEngagementInvitationRequest $args)
    {
        parent::acceptEngagementInvitation($args->toArray());
    }
}
