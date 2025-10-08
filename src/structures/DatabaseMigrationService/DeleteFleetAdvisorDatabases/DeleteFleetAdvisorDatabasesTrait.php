<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteFleetAdvisorDatabases;

trait DeleteFleetAdvisorDatabasesTrait
{
    /**
     * @param DeleteFleetAdvisorDatabasesRequest $args
     * @return DeleteFleetAdvisorDatabasesResponse
     */
    public function deleteFleetAdvisorDatabases(DeleteFleetAdvisorDatabasesRequest $args)
    {
        $result = parent::deleteFleetAdvisorDatabases($args->toArray());
        return new DeleteFleetAdvisorDatabasesResponse($result->toArray());
    }
}
