<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteReplicator;

trait DeleteReplicatorTrait
{
    /**
     * @param DeleteReplicatorRequest $args
     * @return DeleteReplicatorResponse
     */
    public function deleteReplicator(DeleteReplicatorRequest $args)
    {
        $result = parent::deleteReplicator($args->toArray());
        return new DeleteReplicatorResponse($result->toArray());
    }
}
