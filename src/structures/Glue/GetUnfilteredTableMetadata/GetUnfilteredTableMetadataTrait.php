<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata;

trait GetUnfilteredTableMetadataTrait
{
    /**
     * @param GetUnfilteredTableMetadataRequest $args
     * @return GetUnfilteredTableMetadataResponse
     */
    public function getUnfilteredTableMetadata(GetUnfilteredTableMetadataRequest $args)
    {
        $result = parent::getUnfilteredTableMetadata($args->toArray());
        return new GetUnfilteredTableMetadataResponse($result->toArray());
    }
}
