<?php

namespace Sunaoka\Aws\Structures\Ecr\InitiateLayerUpload;

trait InitiateLayerUploadTrait
{
    /**
     * @param InitiateLayerUploadRequest $args
     * @return InitiateLayerUploadResponse
     */
    public function initiateLayerUpload(InitiateLayerUploadRequest $args)
    {
        $result = parent::initiateLayerUpload($args->toArray());
        return new InitiateLayerUploadResponse($result->toArray());
    }
}
