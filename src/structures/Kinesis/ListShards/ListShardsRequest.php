<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListShards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $NextToken
 * @property string|null $ExclusiveStartShardId
 * @property int<1, 10000>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $StreamCreationTimestamp
 * @property Shapes\ShardFilter|null $ShardFilter
 * @property string|null $StreamARN
 */
class ListShardsRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     NextToken?: string|null,
     *     ExclusiveStartShardId?: string|null,
     *     MaxResults?: int<1, 10000>|null,
     *     StreamCreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ShardFilter?: Shapes\ShardFilter|null,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
