<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateImage;

trait UpdateImageTrait
{
    /**
     * @param UpdateImageRequest $args
     * @return UpdateImageResponse
     */
    public function updateImage(UpdateImageRequest $args)
    {
        $result = parent::updateImage($args->toArray());
        return new UpdateImageResponse($result->toArray());
    }
}
