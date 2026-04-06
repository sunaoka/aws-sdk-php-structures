<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceMetadata;

trait UpdateWorkspaceMetadataTrait
{
    /**
     * @param UpdateWorkspaceMetadataRequest $args
     * @return UpdateWorkspaceMetadataResponse
     */
    public function updateWorkspaceMetadata(UpdateWorkspaceMetadataRequest $args)
    {
        $result = parent::updateWorkspaceMetadata($args->toArray());
        return new UpdateWorkspaceMetadataResponse($result->toArray());
    }
}
