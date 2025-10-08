<?php

namespace Sunaoka\Aws\Structures\Ec2\RegisterImage;

trait RegisterImageTrait
{
    /**
     * @param RegisterImageRequest $args
     * @return RegisterImageResponse
     */
    public function registerImage(RegisterImageRequest $args)
    {
        $result = parent::registerImage($args->toArray());
        return new RegisterImageResponse($result->toArray());
    }
}
