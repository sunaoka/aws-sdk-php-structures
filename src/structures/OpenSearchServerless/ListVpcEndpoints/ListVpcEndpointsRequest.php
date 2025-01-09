<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\VpcEndpointFilters $vpcEndpointFilters
 */
class ListVpcEndpointsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     vpcEndpointFilters?: Shapes\VpcEndpointFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
