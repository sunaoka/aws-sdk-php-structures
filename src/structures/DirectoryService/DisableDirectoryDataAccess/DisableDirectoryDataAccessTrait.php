<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableDirectoryDataAccess;

trait DisableDirectoryDataAccessTrait
{
    /**
     * @param DisableDirectoryDataAccessRequest $args
     * @return DisableDirectoryDataAccessResponse
     */
    public function disableDirectoryDataAccess(DisableDirectoryDataAccessRequest $args)
    {
        $result = parent::disableDirectoryDataAccess($args->toArray());
        return new DisableDirectoryDataAccessResponse($result->toArray());
    }
}
