<?php

namespace Sunaoka\Aws\Structures\S3Tables\CompleteTableMigration;

trait CompleteTableMigrationTrait
{
    /**
     * @param CompleteTableMigrationRequest $args
     * @return void
     */
    public function completeTableMigration(CompleteTableMigrationRequest $args)
    {
        parent::completeTableMigration($args->toArray());
    }
}
