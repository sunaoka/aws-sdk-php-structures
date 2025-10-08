<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetFile;

trait GetFileTrait
{
    /**
     * @param GetFileRequest $args
     * @return GetFileResponse
     */
    public function getFile(GetFileRequest $args)
    {
        $result = parent::getFile($args->toArray());
        return new GetFileResponse($result->toArray());
    }
}
