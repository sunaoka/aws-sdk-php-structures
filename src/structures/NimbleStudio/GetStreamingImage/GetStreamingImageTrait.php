<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStreamingImage;

trait GetStreamingImageTrait
{
    /**
     * @param GetStreamingImageRequest $args
     * @return GetStreamingImageResponse
     */
    public function getStreamingImage(GetStreamingImageRequest $args)
    {
        $result = parent::getStreamingImage($args->toArray());
        return new GetStreamingImageResponse($result->toArray());
    }
}
