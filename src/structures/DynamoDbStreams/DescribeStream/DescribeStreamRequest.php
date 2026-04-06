<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamArn
 * @property int<1, max>|null $Limit
 * @property string|null $ExclusiveStartShardId
 * @property Shapes\ShardFilter|null $ShardFilter
 */
class DescribeStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamArn: string,
     *     Limit?: int<1, max>|null,
     *     ExclusiveStartShardId?: string|null,
     *     ShardFilter?: Shapes\ShardFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
