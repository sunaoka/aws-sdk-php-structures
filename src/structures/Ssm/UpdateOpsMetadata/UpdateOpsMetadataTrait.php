<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateOpsMetadata;

trait UpdateOpsMetadataTrait
{
    /**
     * @param UpdateOpsMetadataRequest $args
     * @return UpdateOpsMetadataResponse
     */
    public function updateOpsMetadata(UpdateOpsMetadataRequest $args)
    {
        $result = parent::updateOpsMetadata($args->toArray());
        return new UpdateOpsMetadataResponse($result->toArray());
    }
}
