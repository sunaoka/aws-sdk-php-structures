<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamArn
 * @property int $Limit
 * @property string $ExclusiveStartShardId
 */
class DescribeStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamArn: string,
     *     Limit?: int,
     *     ExclusiveStartShardId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
