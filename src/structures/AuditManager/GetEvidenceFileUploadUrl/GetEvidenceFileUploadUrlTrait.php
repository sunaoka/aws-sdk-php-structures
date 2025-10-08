<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetEvidenceFileUploadUrl;

trait GetEvidenceFileUploadUrlTrait
{
    /**
     * @param GetEvidenceFileUploadUrlRequest $args
     * @return GetEvidenceFileUploadUrlResponse
     */
    public function getEvidenceFileUploadUrl(GetEvidenceFileUploadUrlRequest $args)
    {
        $result = parent::getEvidenceFileUploadUrl($args->toArray());
        return new GetEvidenceFileUploadUrlResponse($result->toArray());
    }
}
