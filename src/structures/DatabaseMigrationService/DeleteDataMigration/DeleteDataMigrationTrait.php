<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataMigration;

trait DeleteDataMigrationTrait
{
    /**
     * @param DeleteDataMigrationRequest $args
     * @return DeleteDataMigrationResponse
     */
    public function deleteDataMigration(DeleteDataMigrationRequest $args)
    {
        $result = parent::deleteDataMigration($args->toArray());
        return new DeleteDataMigrationResponse($result->toArray());
    }
}
