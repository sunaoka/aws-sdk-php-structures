<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteOpsMetadata;

trait DeleteOpsMetadataTrait
{
    /**
     * @param DeleteOpsMetadataRequest $args
     * @return DeleteOpsMetadataResponse
     */
    public function deleteOpsMetadata(DeleteOpsMetadataRequest $args)
    {
        $result = parent::deleteOpsMetadata($args->toArray());
        return new DeleteOpsMetadataResponse($result->toArray());
    }
}
