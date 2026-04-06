<?php

namespace Sunaoka\Aws\Structures\Connect\GetAttachedFile;

trait GetAttachedFileTrait
{
    /**
     * @param GetAttachedFileRequest $args
     * @return GetAttachedFileResponse
     */
    public function getAttachedFile(GetAttachedFileRequest $args)
    {
        $result = parent::getAttachedFile($args->toArray());
        return new GetAttachedFileResponse($result->toArray());
    }
}
