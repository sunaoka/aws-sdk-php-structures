<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetMetadata;

trait GetReadSetMetadataTrait
{
    /**
     * @param GetReadSetMetadataRequest $args
     * @return GetReadSetMetadataResponse
     */
    public function getReadSetMetadata(GetReadSetMetadataRequest $args)
    {
        $result = parent::getReadSetMetadata($args->toArray());
        return new GetReadSetMetadataResponse($result->toArray());
    }
}
