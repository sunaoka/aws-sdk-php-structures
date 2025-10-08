<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyReplicationInstance;

trait ModifyReplicationInstanceTrait
{
    /**
     * @param ModifyReplicationInstanceRequest $args
     * @return ModifyReplicationInstanceResponse
     */
    public function modifyReplicationInstance(ModifyReplicationInstanceRequest $args)
    {
        $result = parent::modifyReplicationInstance($args->toArray());
        return new ModifyReplicationInstanceResponse($result->toArray());
    }
}
