<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRegistrationAttachment;

trait DeleteRegistrationAttachmentTrait
{
    /**
     * @param DeleteRegistrationAttachmentRequest $args
     * @return DeleteRegistrationAttachmentResponse
     */
    public function deleteRegistrationAttachment(DeleteRegistrationAttachmentRequest $args)
    {
        $result = parent::deleteRegistrationAttachment($args->toArray());
        return new DeleteRegistrationAttachmentResponse($result->toArray());
    }
}
