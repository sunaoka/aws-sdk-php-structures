<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage;

trait GetClustersForImageTrait
{
    /**
     * @param GetClustersForImageRequest $args
     * @return GetClustersForImageResponse
     */
    public function getClustersForImage(GetClustersForImageRequest $args)
    {
        $result = parent::getClustersForImage($args->toArray());
        return new GetClustersForImageResponse($result->toArray());
    }
}
