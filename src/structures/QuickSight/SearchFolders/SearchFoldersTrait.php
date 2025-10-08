<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchFolders;

trait SearchFoldersTrait
{
    /**
     * @param SearchFoldersRequest $args
     * @return SearchFoldersResponse
     */
    public function searchFolders(SearchFoldersRequest $args)
    {
        $result = parent::searchFolders($args->toArray());
        return new SearchFoldersResponse($result->toArray());
    }
}
