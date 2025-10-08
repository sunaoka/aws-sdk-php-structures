<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetAttachment;

trait GetAttachmentTrait
{
    /**
     * @param GetAttachmentRequest $args
     * @return GetAttachmentResponse
     */
    public function getAttachment(GetAttachmentRequest $args)
    {
        $result = parent::getAttachment($args->toArray());
        return new GetAttachmentResponse($result->toArray());
    }
}
