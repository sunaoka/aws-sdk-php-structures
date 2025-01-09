<?php

namespace Sunaoka\Aws\Structures\Kinesis\GetRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShardIterator
 * @property int $Limit
 * @property string $StreamARN
 */
class GetRecordsRequest extends Request
{
    /**
     * @param array{
     *     ShardIterator: string,
     *     Limit?: int,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
