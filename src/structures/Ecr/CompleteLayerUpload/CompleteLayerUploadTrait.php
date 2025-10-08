<?php

namespace Sunaoka\Aws\Structures\Ecr\CompleteLayerUpload;

trait CompleteLayerUploadTrait
{
    /**
     * @param CompleteLayerUploadRequest $args
     * @return CompleteLayerUploadResponse
     */
    public function completeLayerUpload(CompleteLayerUploadRequest $args)
    {
        $result = parent::completeLayerUpload($args->toArray());
        return new CompleteLayerUploadResponse($result->toArray());
    }
}
