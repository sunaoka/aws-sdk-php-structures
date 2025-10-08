<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListCompatibleImages;

trait ListCompatibleImagesTrait
{
    /**
     * @param ListCompatibleImagesRequest $args
     * @return ListCompatibleImagesResponse
     */
    public function listCompatibleImages(ListCompatibleImagesRequest $args)
    {
        $result = parent::listCompatibleImages($args->toArray());
        return new ListCompatibleImagesResponse($result->toArray());
    }
}
