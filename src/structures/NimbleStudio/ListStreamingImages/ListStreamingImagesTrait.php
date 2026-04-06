<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListStreamingImages;

trait ListStreamingImagesTrait
{
    /**
     * @param ListStreamingImagesRequest $args
     * @return ListStreamingImagesResponse
     */
    public function listStreamingImages(ListStreamingImagesRequest $args)
    {
        $result = parent::listStreamingImages($args->toArray());
        return new ListStreamingImagesResponse($result->toArray());
    }
}
