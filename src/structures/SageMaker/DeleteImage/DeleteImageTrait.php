<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteImage;

trait DeleteImageTrait
{
    /**
     * @param DeleteImageRequest $args
     * @return DeleteImageResponse
     */
    public function deleteImage(DeleteImageRequest $args)
    {
        $result = parent::deleteImage($args->toArray());
        return new DeleteImageResponse($result->toArray());
    }
}
