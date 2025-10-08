<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetConnectAttachment;

trait GetConnectAttachmentTrait
{
    /**
     * @param GetConnectAttachmentRequest $args
     * @return GetConnectAttachmentResponse
     */
    public function getConnectAttachment(GetConnectAttachmentRequest $args)
    {
        $result = parent::getConnectAttachment($args->toArray());
        return new GetConnectAttachmentResponse($result->toArray());
    }
}
