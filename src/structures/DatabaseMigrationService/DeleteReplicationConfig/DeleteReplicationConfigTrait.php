<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteReplicationConfig;

trait DeleteReplicationConfigTrait
{
    /**
     * @param DeleteReplicationConfigRequest $args
     * @return DeleteReplicationConfigResponse
     */
    public function deleteReplicationConfig(DeleteReplicationConfigRequest $args)
    {
        $result = parent::deleteReplicationConfig($args->toArray());
        return new DeleteReplicationConfigResponse($result->toArray());
    }
}
