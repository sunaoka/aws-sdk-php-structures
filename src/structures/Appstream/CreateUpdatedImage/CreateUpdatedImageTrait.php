<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateUpdatedImage;

trait CreateUpdatedImageTrait
{
    /**
     * @param CreateUpdatedImageRequest $args
     * @return CreateUpdatedImageResponse
     */
    public function createUpdatedImage(CreateUpdatedImageRequest $args)
    {
        $result = parent::createUpdatedImage($args->toArray());
        return new CreateUpdatedImageResponse($result->toArray());
    }
}
