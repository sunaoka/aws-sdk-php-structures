<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShardIterator
 * @property int<1, 10000> $Limit
 * @property string $StreamARN
 */
class GetRecordsRequest extends Request
{
    /**
     * @param array{
     *     ShardIterator: string,
     *     Limit?: int<1, 10000>,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
