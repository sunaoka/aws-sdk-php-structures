<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\StartAttachmentUpload;

trait StartAttachmentUploadTrait
{
    /**
     * @param StartAttachmentUploadRequest $args
     * @return StartAttachmentUploadResponse
     */
    public function startAttachmentUpload(StartAttachmentUploadRequest $args)
    {
        $result = parent::startAttachmentUpload($args->toArray());
        return new StartAttachmentUploadResponse($result->toArray());
    }
}
