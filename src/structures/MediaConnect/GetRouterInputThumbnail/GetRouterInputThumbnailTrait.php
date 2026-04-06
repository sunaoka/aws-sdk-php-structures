<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInputThumbnail;

trait GetRouterInputThumbnailTrait
{
    /**
     * @param GetRouterInputThumbnailRequest $args
     * @return GetRouterInputThumbnailResponse
     */
    public function getRouterInputThumbnail(GetRouterInputThumbnailRequest $args)
    {
        $result = parent::getRouterInputThumbnail($args->toArray());
        return new GetRouterInputThumbnailResponse($result->toArray());
    }
}
