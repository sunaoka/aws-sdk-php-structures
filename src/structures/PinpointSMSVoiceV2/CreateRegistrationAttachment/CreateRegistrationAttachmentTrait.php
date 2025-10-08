<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistrationAttachment;

trait CreateRegistrationAttachmentTrait
{
    /**
     * @param CreateRegistrationAttachmentRequest $args
     * @return CreateRegistrationAttachmentResponse
     */
    public function createRegistrationAttachment(CreateRegistrationAttachmentRequest $args)
    {
        $result = parent::createRegistrationAttachment($args->toArray());
        return new CreateRegistrationAttachmentResponse($result->toArray());
    }
}
