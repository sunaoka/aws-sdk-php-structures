<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFolder;

trait GetFolderTrait
{
    /**
     * @param GetFolderRequest $args
     * @return GetFolderResponse
     */
    public function getFolder(GetFolderRequest $args)
    {
        $result = parent::getFolder($args->toArray());
        return new GetFolderResponse($result->toArray());
    }
}
