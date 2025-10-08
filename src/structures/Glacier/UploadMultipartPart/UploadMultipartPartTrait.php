<?php

namespace Sunaoka\Aws\Structures\Glacier\UploadMultipartPart;

trait UploadMultipartPartTrait
{
    /**
     * @param UploadMultipartPartRequest $args
     * @return UploadMultipartPartResponse
     */
    public function uploadMultipartPart(UploadMultipartPartRequest $args)
    {
        $result = parent::uploadMultipartPart($args->toArray());
        return new UploadMultipartPartResponse($result->toArray());
    }
}
