<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchGetAttributesMetadata;

trait BatchGetAttributesMetadataTrait
{
    /**
     * @param BatchGetAttributesMetadataRequest $args
     * @return BatchGetAttributesMetadataResponse
     */
    public function batchGetAttributesMetadata(BatchGetAttributesMetadataRequest $args)
    {
        $result = parent::batchGetAttributesMetadata($args->toArray());
        return new BatchGetAttributesMetadataResponse($result->toArray());
    }
}
