<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueueQuickConnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListQueueQuickConnectsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
