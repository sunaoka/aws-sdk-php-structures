<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportWorkspaceImage;

trait ImportWorkspaceImageTrait
{
    /**
     * @param ImportWorkspaceImageRequest $args
     * @return ImportWorkspaceImageResponse
     */
    public function importWorkspaceImage(ImportWorkspaceImageRequest $args)
    {
        $result = parent::importWorkspaceImage($args->toArray());
        return new ImportWorkspaceImageResponse($result->toArray());
    }
}
