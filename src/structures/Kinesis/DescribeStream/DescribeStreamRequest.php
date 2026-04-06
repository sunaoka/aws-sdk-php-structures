<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property int<1, 10000>|null $Limit
 * @property string|null $ExclusiveStartShardId
 * @property string|null $StreamARN
 */
class DescribeStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     Limit?: int<1, 10000>|null,
     *     ExclusiveStartShardId?: string|null,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
