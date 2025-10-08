<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactFlowModuleMetadata;

trait UpdateContactFlowModuleMetadataTrait
{
    /**
     * @param UpdateContactFlowModuleMetadataRequest $args
     * @return UpdateContactFlowModuleMetadataResponse
     */
    public function updateContactFlowModuleMetadata(UpdateContactFlowModuleMetadataRequest $args)
    {
        $result = parent::updateContactFlowModuleMetadata($args->toArray());
        return new UpdateContactFlowModuleMetadataResponse($result->toArray());
    }
}
