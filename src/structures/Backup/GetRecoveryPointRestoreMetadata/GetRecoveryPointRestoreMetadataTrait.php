<?php

namespace Sunaoka\Aws\Structures\Backup\GetRecoveryPointRestoreMetadata;

trait GetRecoveryPointRestoreMetadataTrait
{
    /**
     * @param GetRecoveryPointRestoreMetadataRequest $args
     * @return GetRecoveryPointRestoreMetadataResponse
     */
    public function getRecoveryPointRestoreMetadata(GetRecoveryPointRestoreMetadataRequest $args)
    {
        $result = parent::getRecoveryPointRestoreMetadata($args->toArray());
        return new GetRecoveryPointRestoreMetadataResponse($result->toArray());
    }
}
