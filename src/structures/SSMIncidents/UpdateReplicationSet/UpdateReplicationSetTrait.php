<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateReplicationSet;

trait UpdateReplicationSetTrait
{
    /**
     * @param UpdateReplicationSetRequest $args
     * @return UpdateReplicationSetResponse
     */
    public function updateReplicationSet(UpdateReplicationSetRequest $args)
    {
        $result = parent::updateReplicationSet($args->toArray());
        return new UpdateReplicationSetResponse($result->toArray());
    }
}
