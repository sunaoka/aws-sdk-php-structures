<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator;

trait CreateReplicatorTrait
{
    /**
     * @param CreateReplicatorRequest $args
     * @return CreateReplicatorResponse
     */
    public function createReplicator(CreateReplicatorRequest $args)
    {
        $result = parent::createReplicator($args->toArray());
        return new CreateReplicatorResponse($result->toArray());
    }
}
