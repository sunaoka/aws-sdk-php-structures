<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateUpdatedWorkspaceImage;

trait CreateUpdatedWorkspaceImageTrait
{
    /**
     * @param CreateUpdatedWorkspaceImageRequest $args
     * @return CreateUpdatedWorkspaceImageResponse
     */
    public function createUpdatedWorkspaceImage(CreateUpdatedWorkspaceImageRequest $args)
    {
        $result = parent::createUpdatedWorkspaceImage($args->toArray());
        return new CreateUpdatedWorkspaceImageResponse($result->toArray());
    }
}
