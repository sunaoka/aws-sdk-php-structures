<?php

namespace Sunaoka\Aws\Structures\Organizations\InviteAccountToOrganization;

trait InviteAccountToOrganizationTrait
{
    /**
     * @param InviteAccountToOrganizationRequest $args
     * @return InviteAccountToOrganizationResponse
     */
    public function inviteAccountToOrganization(InviteAccountToOrganizationRequest $args)
    {
        $result = parent::inviteAccountToOrganization($args->toArray());
        return new InviteAccountToOrganizationResponse($result->toArray());
    }
}
