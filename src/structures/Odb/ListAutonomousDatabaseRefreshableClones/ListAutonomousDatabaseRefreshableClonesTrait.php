<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseRefreshableClones;

trait ListAutonomousDatabaseRefreshableClonesTrait
{
    /**
     * @param ListAutonomousDatabaseRefreshableClonesRequest $args
     * @return ListAutonomousDatabaseRefreshableClonesResponse
     */
    public function listAutonomousDatabaseRefreshableClones(ListAutonomousDatabaseRefreshableClonesRequest $args)
    {
        $result = parent::listAutonomousDatabaseRefreshableClones($args->toArray());
        return new ListAutonomousDatabaseRefreshableClonesResponse($result->toArray());
    }
}
