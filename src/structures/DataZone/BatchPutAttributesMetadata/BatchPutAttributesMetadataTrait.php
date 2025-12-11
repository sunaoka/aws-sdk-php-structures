<?php

namespace Sunaoka\Aws\Structures\DataZone\BatchPutAttributesMetadata;

trait BatchPutAttributesMetadataTrait
{
    /**
     * @param BatchPutAttributesMetadataRequest $args
     * @return BatchPutAttributesMetadataResponse
     */
    public function batchPutAttributesMetadata(BatchPutAttributesMetadataRequest $args)
    {
        $result = parent::batchPutAttributesMetadata($args->toArray());
        return new BatchPutAttributesMetadataResponse($result->toArray());
    }
}
