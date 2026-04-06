<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $shardIterator
 * @property int<1, 1000>|null $maxResults
 */
class GetRecordsRequest extends Request
{
    /**
     * @param array{
     *     shardIterator: string,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
