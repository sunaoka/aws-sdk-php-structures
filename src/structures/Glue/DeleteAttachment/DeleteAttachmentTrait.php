<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteAttachment;

trait DeleteAttachmentTrait
{
    /**
     * @param DeleteAttachmentRequest $args
     * @return DeleteAttachmentResponse
     */
    public function deleteAttachment(DeleteAttachmentRequest $args)
    {
        $result = parent::deleteAttachment($args->toArray());
        return new DeleteAttachmentResponse($result->toArray());
    }
}
