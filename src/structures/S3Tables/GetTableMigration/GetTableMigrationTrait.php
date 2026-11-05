<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration;

trait GetTableMigrationTrait
{
    /**
     * @param GetTableMigrationRequest $args
     * @return GetTableMigrationResponse
     */
    public function getTableMigration(GetTableMigrationRequest $args)
    {
        $result = parent::getTableMigration($args->toArray());
        return new GetTableMigrationResponse($result->toArray());
    }
}
