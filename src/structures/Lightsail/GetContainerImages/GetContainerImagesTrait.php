<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerImages;

trait GetContainerImagesTrait
{
    /**
     * @param GetContainerImagesRequest $args
     * @return GetContainerImagesResponse
     */
    public function getContainerImages(GetContainerImagesRequest $args)
    {
        $result = parent::getContainerImages($args->toArray());
        return new GetContainerImagesResponse($result->toArray());
    }
}
