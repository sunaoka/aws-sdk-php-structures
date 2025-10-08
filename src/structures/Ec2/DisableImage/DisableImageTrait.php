<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableImage;

trait DisableImageTrait
{
    /**
     * @param DisableImageRequest $args
     * @return DisableImageResponse
     */
    public function disableImage(DisableImageRequest $args)
    {
        $result = parent::disableImage($args->toArray());
        return new DisableImageResponse($result->toArray());
    }
}
