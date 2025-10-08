<?php

namespace Sunaoka\Aws\Structures\MemoryDB\FailoverShard;

trait FailoverShardTrait
{
    /**
     * @param FailoverShardRequest $args
     * @return FailoverShardResponse
     */
    public function failoverShard(FailoverShardRequest $args)
    {
        $result = parent::failoverShard($args->toArray());
        return new FailoverShardResponse($result->toArray());
    }
}
