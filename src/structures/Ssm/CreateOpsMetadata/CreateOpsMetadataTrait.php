<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateOpsMetadata;

trait CreateOpsMetadataTrait
{
    /**
     * @param CreateOpsMetadataRequest $args
     * @return CreateOpsMetadataResponse
     */
    public function createOpsMetadata(CreateOpsMetadataRequest $args)
    {
        $result = parent::createOpsMetadata($args->toArray());
        return new CreateOpsMetadataResponse($result->toArray());
    }
}
