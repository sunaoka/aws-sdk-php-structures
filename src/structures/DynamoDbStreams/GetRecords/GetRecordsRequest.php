<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShardIterator
 * @property int $Limit
 */
class GetRecordsRequest extends Request
{
    /**
     * @param array{
     *     ShardIterator: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
