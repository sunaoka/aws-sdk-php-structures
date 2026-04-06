<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableDirectoryDataAccess;

trait EnableDirectoryDataAccessTrait
{
    /**
     * @param EnableDirectoryDataAccessRequest $args
     * @return EnableDirectoryDataAccessResponse
     */
    public function enableDirectoryDataAccess(EnableDirectoryDataAccessRequest $args)
    {
        $result = parent::enableDirectoryDataAccess($args->toArray());
        return new EnableDirectoryDataAccessResponse($result->toArray());
    }
}
