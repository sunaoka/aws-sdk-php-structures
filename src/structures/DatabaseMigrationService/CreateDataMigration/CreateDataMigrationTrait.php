<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateDataMigration;

trait CreateDataMigrationTrait
{
    /**
     * @param CreateDataMigrationRequest $args
     * @return CreateDataMigrationResponse
     */
    public function createDataMigration(CreateDataMigrationRequest $args)
    {
        $result = parent::createDataMigration($args->toArray());
        return new CreateDataMigrationResponse($result->toArray());
    }
}
