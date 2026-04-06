<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyDataMigration;

trait ModifyDataMigrationTrait
{
    /**
     * @param ModifyDataMigrationRequest $args
     * @return ModifyDataMigrationResponse
     */
    public function modifyDataMigration(ModifyDataMigrationRequest $args)
    {
        $result = parent::modifyDataMigration($args->toArray());
        return new ModifyDataMigrationResponse($result->toArray());
    }
}
