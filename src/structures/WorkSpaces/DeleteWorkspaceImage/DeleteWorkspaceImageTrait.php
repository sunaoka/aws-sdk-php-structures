<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteWorkspaceImage;

trait DeleteWorkspaceImageTrait
{
    /**
     * @param DeleteWorkspaceImageRequest $args
     * @return DeleteWorkspaceImageResponse
     */
    public function deleteWorkspaceImage(DeleteWorkspaceImageRequest $args)
    {
        $result = parent::deleteWorkspaceImage($args->toArray());
        return new DeleteWorkspaceImageResponse($result->toArray());
    }
}
