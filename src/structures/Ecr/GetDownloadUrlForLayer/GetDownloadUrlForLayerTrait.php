<?php

namespace Sunaoka\Aws\Structures\Ecr\GetDownloadUrlForLayer;

trait GetDownloadUrlForLayerTrait
{
    /**
     * @param GetDownloadUrlForLayerRequest $args
     * @return GetDownloadUrlForLayerResponse
     */
    public function getDownloadUrlForLayer(GetDownloadUrlForLayerRequest $args)
    {
        $result = parent::getDownloadUrlForLayer($args->toArray());
        return new GetDownloadUrlForLayerResponse($result->toArray());
    }
}
