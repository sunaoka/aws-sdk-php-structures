<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationInstance;

trait DeleteReplicationInstanceTrait
{
    /**
     * @param DeleteReplicationInstanceRequest $args
     * @return DeleteReplicationInstanceResponse
     */
    public function deleteReplicationInstance(DeleteReplicationInstanceRequest $args)
    {
        $result = parent::deleteReplicationInstance($args->toArray());
        return new DeleteReplicationInstanceResponse($result->toArray());
    }
}
