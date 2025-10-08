<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterDatabases;

trait UpdateKxClusterDatabasesTrait
{
    /**
     * @param UpdateKxClusterDatabasesRequest $args
     * @return UpdateKxClusterDatabasesResponse
     */
    public function updateKxClusterDatabases(UpdateKxClusterDatabasesRequest $args)
    {
        $result = parent::updateKxClusterDatabases($args->toArray());
        return new UpdateKxClusterDatabasesResponse($result->toArray());
    }
}
