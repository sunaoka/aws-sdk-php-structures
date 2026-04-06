<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInputSourceMetadata;

trait GetRouterInputSourceMetadataTrait
{
    /**
     * @param GetRouterInputSourceMetadataRequest $args
     * @return GetRouterInputSourceMetadataResponse
     */
    public function getRouterInputSourceMetadata(GetRouterInputSourceMetadataRequest $args)
    {
        $result = parent::getRouterInputSourceMetadata($args->toArray());
        return new GetRouterInputSourceMetadataResponse($result->toArray());
    }
}
