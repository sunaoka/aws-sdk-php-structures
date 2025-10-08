<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetImage;

trait BatchGetImageTrait
{
    /**
     * @param BatchGetImageRequest $args
     * @return BatchGetImageResponse
     */
    public function batchGetImage(BatchGetImageRequest $args)
    {
        $result = parent::batchGetImage($args->toArray());
        return new BatchGetImageResponse($result->toArray());
    }
}
