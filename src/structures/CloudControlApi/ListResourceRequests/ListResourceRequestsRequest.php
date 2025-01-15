<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResourceRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ResourceRequestStatusFilter|null $ResourceRequestStatusFilter
 */
class ListResourceRequestsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     ResourceRequestStatusFilter?: Shapes\ResourceRequestStatusFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
