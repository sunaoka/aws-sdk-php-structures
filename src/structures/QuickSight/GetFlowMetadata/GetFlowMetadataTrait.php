<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetFlowMetadata;

trait GetFlowMetadataTrait
{
    /**
     * @param GetFlowMetadataRequest $args
     * @return GetFlowMetadataResponse
     */
    public function getFlowMetadata(GetFlowMetadataRequest $args)
    {
        $result = parent::getFlowMetadata($args->toArray());
        return new GetFlowMetadataResponse($result->toArray());
    }
}
