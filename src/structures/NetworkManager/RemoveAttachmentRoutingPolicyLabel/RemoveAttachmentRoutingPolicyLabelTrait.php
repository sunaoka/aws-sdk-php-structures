<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RemoveAttachmentRoutingPolicyLabel;

trait RemoveAttachmentRoutingPolicyLabelTrait
{
    /**
     * @param RemoveAttachmentRoutingPolicyLabelRequest $args
     * @return RemoveAttachmentRoutingPolicyLabelResponse
     */
    public function removeAttachmentRoutingPolicyLabel(RemoveAttachmentRoutingPolicyLabelRequest $args)
    {
        $result = parent::removeAttachmentRoutingPolicyLabel($args->toArray());
        return new RemoveAttachmentRoutingPolicyLabelResponse($result->toArray());
    }
}
