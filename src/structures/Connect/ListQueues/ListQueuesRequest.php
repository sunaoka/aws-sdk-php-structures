<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<'STANDARD'|'AGENT'>|null $QueueTypes
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueTypes?: list<'STANDARD'|'AGENT'>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
