<?php

namespace Sunaoka\Aws\Structures\S3Tables\SyncTableMigration;

trait SyncTableMigrationTrait
{
    /**
     * @param SyncTableMigrationRequest $args
     * @return SyncTableMigrationResponse
     */
    public function syncTableMigration(SyncTableMigrationRequest $args)
    {
        $result = parent::syncTableMigration($args->toArray());
        return new SyncTableMigrationResponse($result->toArray());
    }
}
