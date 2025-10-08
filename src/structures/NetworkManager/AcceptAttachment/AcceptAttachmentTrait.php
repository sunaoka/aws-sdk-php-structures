<?php

namespace Sunaoka\Aws\Structures\NetworkManager\AcceptAttachment;

trait AcceptAttachmentTrait
{
    /**
     * @param AcceptAttachmentRequest $args
     * @return AcceptAttachmentResponse
     */
    public function acceptAttachment(AcceptAttachmentRequest $args)
    {
        $result = parent::acceptAttachment($args->toArray());
        return new AcceptAttachmentResponse($result->toArray());
    }
}
