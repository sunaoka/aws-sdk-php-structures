<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\ListResourceRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\ResourceRequestStatusFilter $ResourceRequestStatusFilter
 */
class ListResourceRequestsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     ResourceRequestStatusFilter?: Shapes\ResourceRequestStatusFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
