<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListShards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $NextToken
 * @property string $ExclusiveStartShardId
 * @property int $MaxResults
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
     *     MaxResults?: int,
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
