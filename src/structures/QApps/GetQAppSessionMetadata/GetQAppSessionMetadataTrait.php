<?php

namespace Sunaoka\Aws\Structures\QApps\GetQAppSessionMetadata;

trait GetQAppSessionMetadataTrait
{
    /**
     * @param GetQAppSessionMetadataRequest $args
     * @return GetQAppSessionMetadataResponse
     */
    public function getQAppSessionMetadata(GetQAppSessionMetadataRequest $args)
    {
        $result = parent::getQAppSessionMetadata($args->toArray());
        return new GetQAppSessionMetadataResponse($result->toArray());
    }
}
