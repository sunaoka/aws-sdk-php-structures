<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchDeleteImage;

trait BatchDeleteImageTrait
{
    /**
     * @param BatchDeleteImageRequest $args
     * @return BatchDeleteImageResponse
     */
    public function batchDeleteImage(BatchDeleteImageRequest $args)
    {
        $result = parent::batchDeleteImage($args->toArray());
        return new BatchDeleteImageResponse($result->toArray());
    }
}
