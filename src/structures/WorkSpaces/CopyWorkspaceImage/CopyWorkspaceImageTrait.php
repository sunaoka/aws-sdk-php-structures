<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CopyWorkspaceImage;

trait CopyWorkspaceImageTrait
{
    /**
     * @param CopyWorkspaceImageRequest $args
     * @return CopyWorkspaceImageResponse
     */
    public function copyWorkspaceImage(CopyWorkspaceImageRequest $args)
    {
        $result = parent::copyWorkspaceImage($args->toArray());
        return new CopyWorkspaceImageResponse($result->toArray());
    }
}
