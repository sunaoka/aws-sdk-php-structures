<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteReplicationSet;

trait DeleteReplicationSetTrait
{
    /**
     * @param DeleteReplicationSetRequest $args
     * @return DeleteReplicationSetResponse
     */
    public function deleteReplicationSet(DeleteReplicationSetRequest $args)
    {
        $result = parent::deleteReplicationSet($args->toArray());
        return new DeleteReplicationSetResponse($result->toArray());
    }
}
