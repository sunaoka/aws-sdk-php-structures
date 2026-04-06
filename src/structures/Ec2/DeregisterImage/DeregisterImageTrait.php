<?php

namespace Sunaoka\Aws\Structures\Ec2\DeregisterImage;

trait DeregisterImageTrait
{
    /**
     * @param DeregisterImageRequest $args
     * @return DeregisterImageResponse
     */
    public function deregisterImage(DeregisterImageRequest $args)
    {
        $result = parent::deregisterImage($args->toArray());
        return new DeregisterImageResponse($result->toArray());
    }
}
