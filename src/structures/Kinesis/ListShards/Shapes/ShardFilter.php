<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListShards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AFTER_SHARD_ID'|'AT_TRIM_HORIZON'|'FROM_TRIM_HORIZON'|'AT_LATEST'|'AT_TIMESTAMP'|'FROM_TIMESTAMP' $Type
 * @property string $ShardId
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class ShardFilter extends Shape
{
    /**
     * @param array{
     *     Type: 'AFTER_SHARD_ID'|'AT_TRIM_HORIZON'|'FROM_TRIM_HORIZON'|'AT_LATEST'|'AT_TIMESTAMP'|'FROM_TIMESTAMP',
     *     ShardId?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
