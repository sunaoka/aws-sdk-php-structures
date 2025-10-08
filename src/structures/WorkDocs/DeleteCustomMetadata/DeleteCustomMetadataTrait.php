<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteCustomMetadata;

trait DeleteCustomMetadataTrait
{
    /**
     * @param DeleteCustomMetadataRequest $args
     * @return DeleteCustomMetadataResponse
     */
    public function deleteCustomMetadata(DeleteCustomMetadataRequest $args)
    {
        $result = parent::deleteCustomMetadata($args->toArray());
        return new DeleteCustomMetadataResponse($result->toArray());
    }
}
