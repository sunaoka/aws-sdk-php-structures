<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateStreamingImage;

trait UpdateStreamingImageTrait
{
    /**
     * @param UpdateStreamingImageRequest $args
     * @return UpdateStreamingImageResponse
     */
    public function updateStreamingImage(UpdateStreamingImageRequest $args)
    {
        $result = parent::updateStreamingImage($args->toArray());
        return new UpdateStreamingImageResponse($result->toArray());
    }
}
