<?php

namespace Sunaoka\Aws\Structures\Connect\BatchGetAttachedFileMetadata;

trait BatchGetAttachedFileMetadataTrait
{
    /**
     * @param BatchGetAttachedFileMetadataRequest $args
     * @return BatchGetAttachedFileMetadataResponse
     */
    public function batchGetAttachedFileMetadata(BatchGetAttachedFileMetadataRequest $args)
    {
        $result = parent::batchGetAttachedFileMetadata($args->toArray());
        return new BatchGetAttachedFileMetadataResponse($result->toArray());
    }
}
