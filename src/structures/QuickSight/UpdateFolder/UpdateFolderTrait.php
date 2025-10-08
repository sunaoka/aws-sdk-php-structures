<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateFolder;

trait UpdateFolderTrait
{
    /**
     * @param UpdateFolderRequest $args
     * @return UpdateFolderResponse
     */
    public function updateFolder(UpdateFolderRequest $args)
    {
        $result = parent::updateFolder($args->toArray());
        return new UpdateFolderResponse($result->toArray());
    }
}
