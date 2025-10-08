<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateSourceServerReplicationType;

trait UpdateSourceServerReplicationTypeTrait
{
    /**
     * @param UpdateSourceServerReplicationTypeRequest $args
     * @return UpdateSourceServerReplicationTypeResponse
     */
    public function updateSourceServerReplicationType(UpdateSourceServerReplicationTypeRequest $args)
    {
        $result = parent::updateSourceServerReplicationType($args->toArray());
        return new UpdateSourceServerReplicationTypeResponse($result->toArray());
    }
}
