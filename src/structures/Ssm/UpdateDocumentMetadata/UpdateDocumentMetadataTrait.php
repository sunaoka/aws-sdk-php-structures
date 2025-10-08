<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentMetadata;

trait UpdateDocumentMetadataTrait
{
    /**
     * @param UpdateDocumentMetadataRequest $args
     * @return UpdateDocumentMetadataResponse
     */
    public function updateDocumentMetadata(UpdateDocumentMetadataRequest $args)
    {
        $result = parent::updateDocumentMetadata($args->toArray());
        return new UpdateDocumentMetadataResponse($result->toArray());
    }
}
