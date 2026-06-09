<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase;

trait CreateAutonomousDatabaseTrait
{
    /**
     * @param CreateAutonomousDatabaseRequest $args
     * @return CreateAutonomousDatabaseResponse
     */
    public function createAutonomousDatabase(CreateAutonomousDatabaseRequest $args)
    {
        $result = parent::createAutonomousDatabase($args->toArray());
        return new CreateAutonomousDatabaseResponse($result->toArray());
    }
}
