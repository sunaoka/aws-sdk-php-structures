<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteFolder;

trait DeleteFolderTrait
{
    /**
     * @param DeleteFolderRequest $args
     * @return void
     */
    public function deleteFolder(DeleteFolderRequest $args)
    {
        parent::deleteFolder($args->toArray());
    }
}
