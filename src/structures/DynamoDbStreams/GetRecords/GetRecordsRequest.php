<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShardIterator
 * @property int<1, max>|null $Limit
 */
class GetRecordsRequest extends Request
{
    /**
     * @param array{
     *     ShardIterator: string,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
