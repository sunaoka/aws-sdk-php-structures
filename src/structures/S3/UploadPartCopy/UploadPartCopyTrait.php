<?php

namespace Sunaoka\Aws\Structures\S3\UploadPartCopy;

trait UploadPartCopyTrait
{
    /**
     * @param UploadPartCopyRequest $args
     * @return UploadPartCopyResponse
     */
    public function uploadPartCopy(UploadPartCopyRequest $args)
    {
        $result = parent::uploadPartCopy($args->toArray());
        return new UploadPartCopyResponse($result->toArray());
    }
}
