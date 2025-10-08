<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateShardCount;

trait UpdateShardCountTrait
{
    /**
     * @param UpdateShardCountRequest $args
     * @return UpdateShardCountResponse
     */
    public function updateShardCount(UpdateShardCountRequest $args)
    {
        $result = parent::updateShardCount($args->toArray());
        return new UpdateShardCountResponse($result->toArray());
    }
}
