<?php

namespace Sunaoka\Aws\Structures\Kinesis\MergeShards;

trait MergeShardsTrait
{
    /**
     * @param MergeShardsRequest $args
     * @return void
     */
    public function mergeShards(MergeShardsRequest $args)
    {
        parent::mergeShards($args->toArray());
    }
}
