<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ShareDirectory;

trait ShareDirectoryTrait
{
    /**
     * @param ShareDirectoryRequest $args
     * @return ShareDirectoryResponse
     */
    public function shareDirectory(ShareDirectoryRequest $args)
    {
        $result = parent::shareDirectory($args->toArray());
        return new ShareDirectoryResponse($result->toArray());
    }
}
