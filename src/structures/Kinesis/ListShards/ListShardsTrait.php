<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListShards;

trait ListShardsTrait
{
    /**
     * @param ListShardsRequest $args
     * @return ListShardsResponse
     */
    public function listShards(ListShardsRequest $args)
    {
        $result = parent::listShards($args->toArray());
        return new ListShardsResponse($result->toArray());
    }
}
