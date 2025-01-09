<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamArn
 * @property int<1, max> $Limit
 * @property string $ExclusiveStartShardId
 */
class DescribeStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamArn: string,
     *     Limit?: int<1, max>,
     *     ExclusiveStartShardId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
