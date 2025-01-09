<?php

namespace Sunaoka\Aws\Structures\Kinesis\MergeShards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $ShardToMerge
 * @property string $AdjacentShardToMerge
 * @property string $StreamARN
 */
class MergeShardsRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     ShardToMerge: string,
     *     AdjacentShardToMerge: string,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
