<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImage;

trait CreateImageTrait
{
    /**
     * @param CreateImageRequest $args
     * @return CreateImageResponse
     */
    public function createImage(CreateImageRequest $args)
    {
        $result = parent::createImage($args->toArray());
        return new CreateImageResponse($result->toArray());
    }
}
