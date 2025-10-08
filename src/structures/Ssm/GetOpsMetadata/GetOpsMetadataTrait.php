<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsMetadata;

trait GetOpsMetadataTrait
{
    /**
     * @param GetOpsMetadataRequest $args
     * @return GetOpsMetadataResponse
     */
    public function getOpsMetadata(GetOpsMetadataRequest $args)
    {
        $result = parent::getOpsMetadata($args->toArray());
        return new GetOpsMetadataResponse($result->toArray());
    }
}
