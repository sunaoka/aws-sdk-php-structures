<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EndpointFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListEndpointsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EndpointFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
