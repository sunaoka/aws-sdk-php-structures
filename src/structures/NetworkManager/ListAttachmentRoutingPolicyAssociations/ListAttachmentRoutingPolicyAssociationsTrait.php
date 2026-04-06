<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListAttachmentRoutingPolicyAssociations;

trait ListAttachmentRoutingPolicyAssociationsTrait
{
    /**
     * @param ListAttachmentRoutingPolicyAssociationsRequest $args
     * @return ListAttachmentRoutingPolicyAssociationsResponse
     */
    public function listAttachmentRoutingPolicyAssociations(ListAttachmentRoutingPolicyAssociationsRequest $args)
    {
        $result = parent::listAttachmentRoutingPolicyAssociations($args->toArray());
        return new ListAttachmentRoutingPolicyAssociationsResponse($result->toArray());
    }
}
