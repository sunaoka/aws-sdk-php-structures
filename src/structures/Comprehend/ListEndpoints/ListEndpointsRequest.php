<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EndpointFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListEndpointsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EndpointFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
