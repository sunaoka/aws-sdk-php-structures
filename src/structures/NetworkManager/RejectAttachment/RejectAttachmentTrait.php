<?php

namespace Sunaoka\Aws\Structures\NetworkManager\RejectAttachment;

trait RejectAttachmentTrait
{
    /**
     * @param RejectAttachmentRequest $args
     * @return RejectAttachmentResponse
     */
    public function rejectAttachment(RejectAttachmentRequest $args)
    {
        $result = parent::rejectAttachment($args->toArray());
        return new RejectAttachmentResponse($result->toArray());
    }
}
