<?php

namespace Sunaoka\Aws\Structures\S3Tables\UpdateTableMigration;

trait UpdateTableMigrationTrait
{
    /**
     * @param UpdateTableMigrationRequest $args
     * @return UpdateTableMigrationResponse
     */
    public function updateTableMigration(UpdateTableMigrationRequest $args)
    {
        $result = parent::updateTableMigration($args->toArray());
        return new UpdateTableMigrationResponse($result->toArray());
    }
}
