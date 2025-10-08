<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionMetadata;

trait GetUnfilteredPartitionMetadataTrait
{
    /**
     * @param GetUnfilteredPartitionMetadataRequest $args
     * @return GetUnfilteredPartitionMetadataResponse
     */
    public function getUnfilteredPartitionMetadata(GetUnfilteredPartitionMetadataRequest $args)
    {
        $result = parent::getUnfilteredPartitionMetadata($args->toArray());
        return new GetUnfilteredPartitionMetadataResponse($result->toArray());
    }
}
