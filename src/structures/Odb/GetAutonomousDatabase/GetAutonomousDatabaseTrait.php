<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabase;

trait GetAutonomousDatabaseTrait
{
    /**
     * @param GetAutonomousDatabaseRequest $args
     * @return GetAutonomousDatabaseResponse
     */
    public function getAutonomousDatabase(GetAutonomousDatabaseRequest $args)
    {
        $result = parent::getAutonomousDatabase($args->toArray());
        return new GetAutonomousDatabaseResponse($result->toArray());
    }
}
