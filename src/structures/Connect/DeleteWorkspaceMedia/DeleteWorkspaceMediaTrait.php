<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteWorkspaceMedia;

trait DeleteWorkspaceMediaTrait
{
    /**
     * @param DeleteWorkspaceMediaRequest $args
     * @return DeleteWorkspaceMediaResponse
     */
    public function deleteWorkspaceMedia(DeleteWorkspaceMediaRequest $args)
    {
        $result = parent::deleteWorkspaceMedia($args->toArray());
        return new DeleteWorkspaceMediaResponse($result->toArray());
    }
}
