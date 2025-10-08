<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetMetadata;

trait GetMetadataTrait
{
    /**
     * @param GetMetadataRequest $args
     * @return GetMetadataResponse
     */
    public function getMetadata(GetMetadataRequest $args)
    {
        $result = parent::getMetadata($args->toArray());
        return new GetMetadataResponse($result->toArray());
    }
}
