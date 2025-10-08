<?php

namespace Sunaoka\Aws\Structures\Lightsail\RegisterContainerImage;

trait RegisterContainerImageTrait
{
    /**
     * @param RegisterContainerImageRequest $args
     * @return RegisterContainerImageResponse
     */
    public function registerContainerImage(RegisterContainerImageRequest $args)
    {
        $result = parent::registerContainerImage($args->toArray());
        return new RegisterContainerImageResponse($result->toArray());
    }
}
