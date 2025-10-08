<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetReplicationSet;

trait GetReplicationSetTrait
{
    /**
     * @param GetReplicationSetRequest $args
     * @return GetReplicationSetResponse
     */
    public function getReplicationSet(GetReplicationSetRequest $args)
    {
        $result = parent::getReplicationSet($args->toArray());
        return new GetReplicationSetResponse($result->toArray());
    }
}
