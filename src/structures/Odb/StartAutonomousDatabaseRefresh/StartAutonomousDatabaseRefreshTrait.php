<?php

namespace Sunaoka\Aws\Structures\Odb\StartAutonomousDatabaseRefresh;

trait StartAutonomousDatabaseRefreshTrait
{
    /**
     * @param StartAutonomousDatabaseRefreshRequest $args
     * @return StartAutonomousDatabaseRefreshResponse
     */
    public function startAutonomousDatabaseRefresh(StartAutonomousDatabaseRefreshRequest $args)
    {
        $result = parent::startAutonomousDatabaseRefresh($args->toArray());
        return new StartAutonomousDatabaseRefreshResponse($result->toArray());
    }
}
