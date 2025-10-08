<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetFolderPath;

trait GetFolderPathTrait
{
    /**
     * @param GetFolderPathRequest $args
     * @return GetFolderPathResponse
     */
    public function getFolderPath(GetFolderPathRequest $args)
    {
        $result = parent::getFolderPath($args->toArray());
        return new GetFolderPathResponse($result->toArray());
    }
}
