<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsMetadata;

trait ListOpsMetadataTrait
{
    /**
     * @param ListOpsMetadataRequest $args
     * @return ListOpsMetadataResponse
     */
    public function listOpsMetadata(ListOpsMetadataRequest $args)
    {
        $result = parent::listOpsMetadata($args->toArray());
        return new ListOpsMetadataResponse($result->toArray());
    }
}
