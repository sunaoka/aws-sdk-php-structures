<?php

namespace Sunaoka\Aws\Structures\RAM\ListPendingInvitationResources;

trait ListPendingInvitationResourcesTrait
{
    /**
     * @param ListPendingInvitationResourcesRequest $args
     * @return ListPendingInvitationResourcesResponse
     */
    public function listPendingInvitationResources(ListPendingInvitationResourcesRequest $args)
    {
        $result = parent::listPendingInvitationResources($args->toArray());
        return new ListPendingInvitationResourcesResponse($result->toArray());
    }
}
