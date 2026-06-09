<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseVersions;

trait ListAutonomousDatabaseVersionsTrait
{
    /**
     * @param ListAutonomousDatabaseVersionsRequest $args
     * @return ListAutonomousDatabaseVersionsResponse
     */
    public function listAutonomousDatabaseVersions(ListAutonomousDatabaseVersionsRequest $args)
    {
        $result = parent::listAutonomousDatabaseVersions($args->toArray());
        return new ListAutonomousDatabaseVersionsResponse($result->toArray());
    }
}
