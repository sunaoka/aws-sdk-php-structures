<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateFolder;

trait UpdateFolderTrait
{
    /**
     * @param UpdateFolderRequest $args
     * @return void
     */
    public function updateFolder(UpdateFolderRequest $args)
    {
        parent::updateFolder($args->toArray());
    }
}
