<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RejectSharedDirectory;

trait RejectSharedDirectoryTrait
{
    /**
     * @param RejectSharedDirectoryRequest $args
     * @return RejectSharedDirectoryResponse
     */
    public function rejectSharedDirectory(RejectSharedDirectoryRequest $args)
    {
        $result = parent::rejectSharedDirectory($args->toArray());
        return new RejectSharedDirectoryResponse($result->toArray());
    }
}
