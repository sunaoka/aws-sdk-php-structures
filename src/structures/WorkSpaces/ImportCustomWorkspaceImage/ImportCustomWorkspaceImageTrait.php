<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ImportCustomWorkspaceImage;

trait ImportCustomWorkspaceImageTrait
{
    /**
     * @param ImportCustomWorkspaceImageRequest $args
     * @return ImportCustomWorkspaceImageResponse
     */
    public function importCustomWorkspaceImage(ImportCustomWorkspaceImageRequest $args)
    {
        $result = parent::importCustomWorkspaceImage($args->toArray());
        return new ImportCustomWorkspaceImageResponse($result->toArray());
    }
}
