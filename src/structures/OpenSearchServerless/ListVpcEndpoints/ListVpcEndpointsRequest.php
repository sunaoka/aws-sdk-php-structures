<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\VpcEndpointFilters|null $vpcEndpointFilters
 */
class ListVpcEndpointsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     vpcEndpointFilters?: Shapes\VpcEndpointFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
