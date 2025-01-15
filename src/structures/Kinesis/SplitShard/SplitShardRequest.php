<?php

namespace Sunaoka\Aws\Structures\Kinesis\SplitShard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string $ShardToSplit
 * @property string $NewStartingHashKey
 * @property string|null $StreamARN
 */
class SplitShardRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     ShardToSplit: string,
     *     NewStartingHashKey: string,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
