<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StopMigration;

trait StopMigrationTrait
{
    /**
     * @param StopMigrationRequest $args
     * @return StopMigrationResponse
     */
    public function stopMigration(StopMigrationRequest $args)
    {
        $result = parent::stopMigration($args->toArray());
        return new StopMigrationResponse($result->toArray());
    }
}
