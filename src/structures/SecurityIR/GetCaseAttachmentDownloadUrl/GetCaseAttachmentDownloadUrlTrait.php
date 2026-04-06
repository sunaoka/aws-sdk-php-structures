<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetCaseAttachmentDownloadUrl;

trait GetCaseAttachmentDownloadUrlTrait
{
    /**
     * @param GetCaseAttachmentDownloadUrlRequest $args
     * @return GetCaseAttachmentDownloadUrlResponse
     */
    public function getCaseAttachmentDownloadUrl(GetCaseAttachmentDownloadUrlRequest $args)
    {
        $result = parent::getCaseAttachmentDownloadUrl($args->toArray());
        return new GetCaseAttachmentDownloadUrlResponse($result->toArray());
    }
}
