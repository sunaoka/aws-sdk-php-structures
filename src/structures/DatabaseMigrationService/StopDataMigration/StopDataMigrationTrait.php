<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopDataMigration;

trait StopDataMigrationTrait
{
    /**
     * @param StopDataMigrationRequest $args
     * @return StopDataMigrationResponse
     */
    public function stopDataMigration(StopDataMigrationRequest $args)
    {
        $result = parent::stopDataMigration($args->toArray());
        return new StopDataMigrationResponse($result->toArray());
    }
}
