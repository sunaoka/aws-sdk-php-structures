<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StartMigration;

trait StartMigrationTrait
{
    /**
     * @param StartMigrationRequest $args
     * @return StartMigrationResponse
     */
    public function startMigration(StartMigrationRequest $args)
    {
        $result = parent::startMigration($args->toArray());
        return new StartMigrationResponse($result->toArray());
    }
}
