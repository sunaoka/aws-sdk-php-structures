<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetVpcAttachment;

trait GetVpcAttachmentTrait
{
    /**
     * @param GetVpcAttachmentRequest $args
     * @return GetVpcAttachmentResponse
     */
    public function getVpcAttachment(GetVpcAttachmentRequest $args)
    {
        $result = parent::getVpcAttachment($args->toArray());
        return new GetVpcAttachmentResponse($result->toArray());
    }
}
