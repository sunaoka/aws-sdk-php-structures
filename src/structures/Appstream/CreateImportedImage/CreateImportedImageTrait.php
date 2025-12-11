<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateImportedImage;

trait CreateImportedImageTrait
{
    /**
     * @param CreateImportedImageRequest $args
     * @return CreateImportedImageResponse
     */
    public function createImportedImage(CreateImportedImageRequest $args)
    {
        $result = parent::createImportedImage($args->toArray());
        return new CreateImportedImageResponse($result->toArray());
    }
}
