<?php

namespace Sunaoka\Aws\Structures\NetworkManager\PutAttachmentRoutingPolicyLabel;

trait PutAttachmentRoutingPolicyLabelTrait
{
    /**
     * @param PutAttachmentRoutingPolicyLabelRequest $args
     * @return PutAttachmentRoutingPolicyLabelResponse
     */
    public function putAttachmentRoutingPolicyLabel(PutAttachmentRoutingPolicyLabelRequest $args)
    {
        $result = parent::putAttachmentRoutingPolicyLabel($args->toArray());
        return new PutAttachmentRoutingPolicyLabelResponse($result->toArray());
    }
}
