<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStreamingImage;

trait DeleteStreamingImageTrait
{
    /**
     * @param DeleteStreamingImageRequest $args
     * @return DeleteStreamingImageResponse
     */
    public function deleteStreamingImage(DeleteStreamingImageRequest $args)
    {
        $result = parent::deleteStreamingImage($args->toArray());
        return new DeleteStreamingImageResponse($result->toArray());
    }
}
