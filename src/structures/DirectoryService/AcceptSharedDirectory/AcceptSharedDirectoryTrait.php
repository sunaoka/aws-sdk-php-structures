<?php

namespace Sunaoka\Aws\Structures\DirectoryService\AcceptSharedDirectory;

trait AcceptSharedDirectoryTrait
{
    /**
     * @param AcceptSharedDirectoryRequest $args
     * @return AcceptSharedDirectoryResponse
     */
    public function acceptSharedDirectory(AcceptSharedDirectoryRequest $args)
    {
        $result = parent::acceptSharedDirectory($args->toArray());
        return new AcceptSharedDirectoryResponse($result->toArray());
    }
}
