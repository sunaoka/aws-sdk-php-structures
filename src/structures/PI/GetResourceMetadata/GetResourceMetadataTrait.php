<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetadata;

trait GetResourceMetadataTrait
{
    /**
     * @param GetResourceMetadataRequest $args
     * @return GetResourceMetadataResponse
     */
    public function getResourceMetadata(GetResourceMetadataRequest $args)
    {
        $result = parent::getResourceMetadata($args->toArray());
        return new GetResourceMetadataResponse($result->toArray());
    }
}
