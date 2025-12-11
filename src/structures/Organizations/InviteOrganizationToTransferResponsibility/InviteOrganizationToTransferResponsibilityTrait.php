<?php

namespace Sunaoka\Aws\Structures\Organizations\InviteOrganizationToTransferResponsibility;

trait InviteOrganizationToTransferResponsibilityTrait
{
    /**
     * @param InviteOrganizationToTransferResponsibilityRequest $args
     * @return InviteOrganizationToTransferResponsibilityResponse
     */
    public function inviteOrganizationToTransferResponsibility(InviteOrganizationToTransferResponsibilityRequest $args)
    {
        $result = parent::inviteOrganizationToTransferResponsibility($args->toArray());
        return new InviteOrganizationToTransferResponsibilityResponse($result->toArray());
    }
}
