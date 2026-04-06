<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementInvitations;

trait ListEngagementInvitationsTrait
{
    /**
     * @param ListEngagementInvitationsRequest $args
     * @return ListEngagementInvitationsResponse
     */
    public function listEngagementInvitations(ListEngagementInvitationsRequest $args)
    {
        $result = parent::listEngagementInvitations($args->toArray());
        return new ListEngagementInvitationsResponse($result->toArray());
    }
}
