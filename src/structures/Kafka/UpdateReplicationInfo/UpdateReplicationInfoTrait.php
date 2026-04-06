<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo;

trait UpdateReplicationInfoTrait
{
    /**
     * @param UpdateReplicationInfoRequest $args
     * @return UpdateReplicationInfoResponse
     */
    public function updateReplicationInfo(UpdateReplicationInfoRequest $args)
    {
        $result = parent::updateReplicationInfo($args->toArray());
        return new UpdateReplicationInfoResponse($result->toArray());
    }
}
