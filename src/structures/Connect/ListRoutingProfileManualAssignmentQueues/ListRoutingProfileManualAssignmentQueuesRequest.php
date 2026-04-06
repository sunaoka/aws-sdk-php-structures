<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfileManualAssignmentQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $RoutingProfileId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListRoutingProfileManualAssignmentQueuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     RoutingProfileId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
