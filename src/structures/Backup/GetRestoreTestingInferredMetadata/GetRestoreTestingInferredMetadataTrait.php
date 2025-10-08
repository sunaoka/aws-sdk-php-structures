<?php

namespace Sunaoka\Aws\Structures\Backup\GetRestoreTestingInferredMetadata;

trait GetRestoreTestingInferredMetadataTrait
{
    /**
     * @param GetRestoreTestingInferredMetadataRequest $args
     * @return GetRestoreTestingInferredMetadataResponse
     */
    public function getRestoreTestingInferredMetadata(GetRestoreTestingInferredMetadataRequest $args)
    {
        $result = parent::getRestoreTestingInferredMetadata($args->toArray());
        return new GetRestoreTestingInferredMetadataResponse($result->toArray());
    }
}
