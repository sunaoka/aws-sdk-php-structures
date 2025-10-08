<?php

namespace Sunaoka\Aws\Structures\S3\UploadPart;

trait UploadPartTrait
{
    /**
     * @param UploadPartRequest $args
     * @return UploadPartResponse
     */
    public function uploadPart(UploadPartRequest $args)
    {
        $result = parent::uploadPart($args->toArray());
        return new UploadPartResponse($result->toArray());
    }
}
