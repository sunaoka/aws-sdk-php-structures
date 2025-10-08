<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerAPIMetadata;

trait GetContainerAPIMetadataTrait
{
    /**
     * @param GetContainerAPIMetadataRequest $args
     * @return GetContainerAPIMetadataResponse
     */
    public function getContainerAPIMetadata(GetContainerAPIMetadataRequest $args)
    {
        $result = parent::getContainerAPIMetadata($args->toArray());
        return new GetContainerAPIMetadataResponse($result->toArray());
    }
}
