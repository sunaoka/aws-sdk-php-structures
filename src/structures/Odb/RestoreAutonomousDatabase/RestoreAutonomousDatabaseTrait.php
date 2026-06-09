<?php

namespace Sunaoka\Aws\Structures\Odb\RestoreAutonomousDatabase;

trait RestoreAutonomousDatabaseTrait
{
    /**
     * @param RestoreAutonomousDatabaseRequest $args
     * @return RestoreAutonomousDatabaseResponse
     */
    public function restoreAutonomousDatabase(RestoreAutonomousDatabaseRequest $args)
    {
        $result = parent::restoreAutonomousDatabase($args->toArray());
        return new RestoreAutonomousDatabaseResponse($result->toArray());
    }
}
