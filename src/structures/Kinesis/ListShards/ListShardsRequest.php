<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListShards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $NextToken
 * @property string $ExclusiveStartShardId
 * @property int<1, 10000> $MaxResults
 * @property \Aws\Api\DateTimeResult $StreamCreationTimestamp
 * @property Shapes\ShardFilter $ShardFilter
 * @property string $StreamARN
 */
class ListShardsRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     NextToken?: string,
     *     ExclusiveStartShardId?: string,
     *     MaxResults?: int<1, 10000>,
     *     StreamCreationTimestamp?: \Aws\Api\DateTimeResult,
     *     ShardFilter?: Shapes\ShardFilter,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
