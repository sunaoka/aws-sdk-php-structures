<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateVpcAttachment;

trait UpdateVpcAttachmentTrait
{
    /**
     * @param UpdateVpcAttachmentRequest $args
     * @return UpdateVpcAttachmentResponse
     */
    public function updateVpcAttachment(UpdateVpcAttachmentRequest $args)
    {
        $result = parent::updateVpcAttachment($args->toArray());
        return new UpdateVpcAttachmentResponse($result->toArray());
    }
}
