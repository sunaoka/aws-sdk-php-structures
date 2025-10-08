<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFpgaImage;

trait CreateFpgaImageTrait
{
    /**
     * @param CreateFpgaImageRequest $args
     * @return CreateFpgaImageResponse
     */
    public function createFpgaImage(CreateFpgaImageRequest $args)
    {
        $result = parent::createFpgaImage($args->toArray());
        return new CreateFpgaImageResponse($result->toArray());
    }
}
