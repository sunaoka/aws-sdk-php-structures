<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CompleteAttachmentUpload;

trait CompleteAttachmentUploadTrait
{
    /**
     * @param CompleteAttachmentUploadRequest $args
     * @return CompleteAttachmentUploadResponse
     */
    public function completeAttachmentUpload(CompleteAttachmentUploadRequest $args)
    {
        $result = parent::completeAttachmentUpload($args->toArray());
        return new CompleteAttachmentUploadResponse($result->toArray());
    }
}
