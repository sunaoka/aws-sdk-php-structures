<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowMetadata;

trait UpdateContactFlowMetadataTrait
{
    /**
     * @param UpdateContactFlowMetadataRequest $args
     * @return UpdateContactFlowMetadataResponse
     */
    public function updateContactFlowMetadata(UpdateContactFlowMetadataRequest $args)
    {
        $result = parent::updateContactFlowMetadata($args->toArray());
        return new UpdateContactFlowMetadataResponse($result->toArray());
    }
}
