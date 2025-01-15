<?php

namespace Sunaoka\Aws\Structures\Connect\ListQueueQuickConnects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $QueueId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListQueueQuickConnectsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     QueueId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
