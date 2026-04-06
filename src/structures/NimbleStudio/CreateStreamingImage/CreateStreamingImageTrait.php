<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\CreateStreamingImage;

trait CreateStreamingImageTrait
{
    /**
     * @param CreateStreamingImageRequest $args
     * @return CreateStreamingImageResponse
     */
    public function createStreamingImage(CreateStreamingImageRequest $args)
    {
        $result = parent::createStreamingImage($args->toArray());
        return new CreateStreamingImageResponse($result->toArray());
    }
}
