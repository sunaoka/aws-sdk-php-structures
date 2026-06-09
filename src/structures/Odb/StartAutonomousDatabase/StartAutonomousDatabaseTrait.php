<?php

namespace Sunaoka\Aws\Structures\Odb\StartAutonomousDatabase;

trait StartAutonomousDatabaseTrait
{
    /**
     * @param StartAutonomousDatabaseRequest $args
     * @return StartAutonomousDatabaseResponse
     */
    public function startAutonomousDatabase(StartAutonomousDatabaseRequest $args)
    {
        $result = parent::startAutonomousDatabase($args->toArray());
        return new StartAutonomousDatabaseResponse($result->toArray());
    }
}
