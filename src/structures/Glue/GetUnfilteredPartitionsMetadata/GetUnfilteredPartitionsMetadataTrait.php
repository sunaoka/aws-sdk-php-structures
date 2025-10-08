<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionsMetadata;

trait GetUnfilteredPartitionsMetadataTrait
{
    /**
     * @param GetUnfilteredPartitionsMetadataRequest $args
     * @return GetUnfilteredPartitionsMetadataResponse
     */
    public function getUnfilteredPartitionsMetadata(GetUnfilteredPartitionsMetadataRequest $args)
    {
        $result = parent::getUnfilteredPartitionsMetadata($args->toArray());
        return new GetUnfilteredPartitionsMetadataResponse($result->toArray());
    }
}
