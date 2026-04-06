<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StartDataMigration;

trait StartDataMigrationTrait
{
    /**
     * @param StartDataMigrationRequest $args
     * @return StartDataMigrationResponse
     */
    public function startDataMigration(StartDataMigrationRequest $args)
    {
        $result = parent::startDataMigration($args->toArray());
        return new StartDataMigrationResponse($result->toArray());
    }
}
