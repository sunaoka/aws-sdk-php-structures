<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreJobMetadata;

trait GetRestoreJobMetadataTrait
{
    /**
     * @param GetRestoreJobMetadataRequest $args
     * @return GetRestoreJobMetadataResponse
     */
    public function getRestoreJobMetadata(GetRestoreJobMetadataRequest $args)
    {
        $result = parent::getRestoreJobMetadata($args->toArray());
        return new GetRestoreJobMetadataResponse($result->toArray());
    }
}
