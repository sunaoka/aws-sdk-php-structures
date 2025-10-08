<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFolders;

trait ListFoldersTrait
{
    /**
     * @param ListFoldersRequest $args
     * @return ListFoldersResponse
     */
    public function listFolders(ListFoldersRequest $args)
    {
        $result = parent::listFolders($args->toArray());
        return new ListFoldersResponse($result->toArray());
    }
}
