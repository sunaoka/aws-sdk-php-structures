<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\VpcEndpointFilters $vpcEndpointFilters
 */
class ListVpcEndpointsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     vpcEndpointFilters?: Shapes\VpcEndpointFilters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
