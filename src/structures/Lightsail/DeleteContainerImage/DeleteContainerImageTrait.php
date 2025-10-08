<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteContainerImage;

trait DeleteContainerImageTrait
{
    /**
     * @param DeleteContainerImageRequest $args
     * @return DeleteContainerImageResponse
     */
    public function deleteContainerImage(DeleteContainerImageRequest $args)
    {
        $result = parent::deleteContainerImage($args->toArray());
        return new DeleteContainerImageResponse($result->toArray());
    }
}
