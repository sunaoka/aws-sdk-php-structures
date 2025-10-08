<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteFolder;

trait DeleteFolderTrait
{
    /**
     * @param DeleteFolderRequest $args
     * @return DeleteFolderResponse
     */
    public function deleteFolder(DeleteFolderRequest $args)
    {
        $result = parent::deleteFolder($args->toArray());
        return new DeleteFolderResponse($result->toArray());
    }
}
