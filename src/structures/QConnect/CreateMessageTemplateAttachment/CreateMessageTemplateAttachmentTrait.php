<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateAttachment;

trait CreateMessageTemplateAttachmentTrait
{
    /**
     * @param CreateMessageTemplateAttachmentRequest $args
     * @return CreateMessageTemplateAttachmentResponse
     */
    public function createMessageTemplateAttachment(CreateMessageTemplateAttachmentRequest $args)
    {
        $result = parent::createMessageTemplateAttachment($args->toArray());
        return new CreateMessageTemplateAttachmentResponse($result->toArray());
    }
}
