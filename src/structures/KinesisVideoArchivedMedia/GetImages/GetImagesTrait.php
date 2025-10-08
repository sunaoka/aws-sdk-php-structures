<?php

namespace Sunaoka\Aws\Structures\KinesisVideoArchivedMedia\GetImages;

trait GetImagesTrait
{
    /**
     * @param GetImagesRequest $args
     * @return GetImagesResponse
     */
    public function getImages(GetImagesRequest $args)
    {
        $result = parent::getImages($args->toArray());
        return new GetImagesResponse($result->toArray());
    }
}
