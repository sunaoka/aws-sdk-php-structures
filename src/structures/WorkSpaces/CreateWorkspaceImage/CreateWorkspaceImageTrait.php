<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceImage;

trait CreateWorkspaceImageTrait
{
    /**
     * @param CreateWorkspaceImageRequest $args
     * @return CreateWorkspaceImageResponse
     */
    public function createWorkspaceImage(CreateWorkspaceImageRequest $args)
    {
        $result = parent::createWorkspaceImage($args->toArray());
        return new CreateWorkspaceImageResponse($result->toArray());
    }
}
