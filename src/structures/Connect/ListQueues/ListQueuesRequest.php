<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<'STANDARD'|'AGENT'> $QueueTypes
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueTypes?: list<'STANDARD'|'AGENT'>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
