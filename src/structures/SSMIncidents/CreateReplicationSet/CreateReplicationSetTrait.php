<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateReplicationSet;

trait CreateReplicationSetTrait
{
    /**
     * @param CreateReplicationSetRequest $args
     * @return CreateReplicationSetResponse
     */
    public function createReplicationSet(CreateReplicationSetRequest $args)
    {
        $result = parent::createReplicationSet($args->toArray());
        return new CreateReplicationSetResponse($result->toArray());
    }
}
