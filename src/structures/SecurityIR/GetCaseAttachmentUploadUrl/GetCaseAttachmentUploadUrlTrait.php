<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCaseAttachmentUploadUrl;

trait GetCaseAttachmentUploadUrlTrait
{
    /**
     * @param GetCaseAttachmentUploadUrlRequest $args
     * @return GetCaseAttachmentUploadUrlResponse
     */
    public function getCaseAttachmentUploadUrl(GetCaseAttachmentUploadUrlRequest $args)
    {
        $result = parent::getCaseAttachmentUploadUrl($args->toArray());
        return new GetCaseAttachmentUploadUrlResponse($result->toArray());
    }
}
