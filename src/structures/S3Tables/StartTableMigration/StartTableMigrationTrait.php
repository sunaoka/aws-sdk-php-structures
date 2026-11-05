<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration;

trait StartTableMigrationTrait
{
    /**
     * @param StartTableMigrationRequest $args
     * @return StartTableMigrationResponse
     */
    public function startTableMigration(StartTableMigrationRequest $args)
    {
        $result = parent::startTableMigration($args->toArray());
        return new StartTableMigrationResponse($result->toArray());
    }
}
