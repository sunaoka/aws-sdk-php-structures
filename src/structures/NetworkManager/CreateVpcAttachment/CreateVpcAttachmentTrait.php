<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateVpcAttachment;

trait CreateVpcAttachmentTrait
{
    /**
     * @param CreateVpcAttachmentRequest $args
     * @return CreateVpcAttachmentResponse
     */
    public function createVpcAttachment(CreateVpcAttachmentRequest $args)
    {
        $result = parent::createVpcAttachment($args->toArray());
        return new CreateVpcAttachmentResponse($result->toArray());
    }
}
