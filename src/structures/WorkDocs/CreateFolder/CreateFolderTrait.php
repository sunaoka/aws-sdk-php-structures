<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateFolder;

trait CreateFolderTrait
{
    /**
     * @param CreateFolderRequest $args
     * @return CreateFolderResponse
     */
    public function createFolder(CreateFolderRequest $args)
    {
        $result = parent::createFolder($args->toArray());
        return new CreateFolderResponse($result->toArray());
    }
}
