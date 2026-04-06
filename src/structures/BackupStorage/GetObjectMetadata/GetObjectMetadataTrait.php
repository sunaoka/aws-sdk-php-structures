<?php

namespace Sunaoka\Aws\Structures\BackupStorage\GetObjectMetadata;

trait GetObjectMetadataTrait
{
    /**
     * @param GetObjectMetadataRequest $args
     * @return GetObjectMetadataResponse
     */
    public function getObjectMetadata(GetObjectMetadataRequest $args)
    {
        $result = parent::getObjectMetadata($args->toArray());
        return new GetObjectMetadataResponse($result->toArray());
    }
}
