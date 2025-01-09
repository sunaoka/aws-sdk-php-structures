<?php

namespace Sunaoka\Aws\Structures\Kinesis\SplitShard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $ShardToSplit
 * @property string $NewStartingHashKey
 * @property string $StreamARN
 */
class SplitShardRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     ShardToSplit: string,
     *     NewStartingHashKey: string,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
