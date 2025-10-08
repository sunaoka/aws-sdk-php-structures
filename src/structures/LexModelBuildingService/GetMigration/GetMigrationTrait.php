<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigration;

trait GetMigrationTrait
{
    /**
     * @param GetMigrationRequest $args
     * @return GetMigrationResponse
     */
    public function getMigration(GetMigrationRequest $args)
    {
        $result = parent::getMigration($args->toArray());
        return new GetMigrationResponse($result->toArray());
    }
}
