<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteMessageTemplateAttachment;

trait DeleteMessageTemplateAttachmentTrait
{
    /**
     * @param DeleteMessageTemplateAttachmentRequest $args
     * @return DeleteMessageTemplateAttachmentResponse
     */
    public function deleteMessageTemplateAttachment(DeleteMessageTemplateAttachmentRequest $args)
    {
        $result = parent::deleteMessageTemplateAttachment($args->toArray());
        return new DeleteMessageTemplateAttachmentResponse($result->toArray());
    }
}
