<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\RebootReplicationInstance;

trait RebootReplicationInstanceTrait
{
    /**
     * @param RebootReplicationInstanceRequest $args
     * @return RebootReplicationInstanceResponse
     */
    public function rebootReplicationInstance(RebootReplicationInstanceRequest $args)
    {
        $result = parent::rebootReplicationInstance($args->toArray());
        return new RebootReplicationInstanceResponse($result->toArray());
    }
}
