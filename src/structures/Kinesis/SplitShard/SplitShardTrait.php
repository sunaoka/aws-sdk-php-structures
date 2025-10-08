<?php

namespace Sunaoka\Aws\Structures\Kinesis\SplitShard;

trait SplitShardTrait
{
    /**
     * @param SplitShardRequest $args
     * @return void
     */
    public function splitShard(SplitShardRequest $args)
    {
        parent::splitShard($args->toArray());
    }
}
