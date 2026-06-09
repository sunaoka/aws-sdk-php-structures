<?php

namespace Sunaoka\Aws\Structures\Odb\StopAutonomousDatabase;

trait StopAutonomousDatabaseTrait
{
    /**
     * @param StopAutonomousDatabaseRequest $args
     * @return StopAutonomousDatabaseResponse
     */
    public function stopAutonomousDatabase(StopAutonomousDatabaseRequest $args)
    {
        $result = parent::stopAutonomousDatabase($args->toArray());
        return new StopAutonomousDatabaseResponse($result->toArray());
    }
}
