<?php

namespace Sunaoka\Aws\Structures\Connect\CreateAttachedFile;

trait CreateAttachedFileTrait
{
    /**
     * @param CreateAttachedFileRequest $args
     * @return CreateAttachedFileResponse
     */
    public function createAttachedFile(CreateAttachedFileRequest $args)
    {
        $result = parent::createAttachedFile($args->toArray());
        return new CreateAttachedFileResponse($result->toArray());
    }
}
