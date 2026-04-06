<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetArtifactMetadata;

trait BatchGetArtifactMetadataTrait
{
    /**
     * @param BatchGetArtifactMetadataRequest $args
     * @return BatchGetArtifactMetadataResponse
     */
    public function batchGetArtifactMetadata(BatchGetArtifactMetadataRequest $args)
    {
        $result = parent::batchGetArtifactMetadata($args->toArray());
        return new BatchGetArtifactMetadataResponse($result->toArray());
    }
}
