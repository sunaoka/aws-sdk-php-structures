<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteFolderContents;

trait DeleteFolderContentsTrait
{
    /**
     * @param DeleteFolderContentsRequest $args
     * @return void
     */
    public function deleteFolderContents(DeleteFolderContentsRequest $args)
    {
        parent::deleteFolderContents($args->toArray());
    }
}
