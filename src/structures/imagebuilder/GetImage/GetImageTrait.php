<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage;

trait GetImageTrait
{
    /**
     * @param GetImageRequest $args
     * @return GetImageResponse
     */
    public function getImage(GetImageRequest $args)
    {
        $result = parent::getImage($args->toArray());
        return new GetImageResponse($result->toArray());
    }
}
