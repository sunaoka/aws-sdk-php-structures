<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabases;

trait ListAutonomousDatabasesTrait
{
    /**
     * @param ListAutonomousDatabasesRequest $args
     * @return ListAutonomousDatabasesResponse
     */
    public function listAutonomousDatabases(ListAutonomousDatabasesRequest $args)
    {
        $result = parent::listAutonomousDatabases($args->toArray());
        return new ListAutonomousDatabasesResponse($result->toArray());
    }
}
