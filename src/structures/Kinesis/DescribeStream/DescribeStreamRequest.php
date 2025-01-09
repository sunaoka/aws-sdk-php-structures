<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property int $Limit
 * @property string $ExclusiveStartShardId
 * @property string $StreamARN
 */
class DescribeStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     Limit?: int,
     *     ExclusiveStartShardId?: string,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
