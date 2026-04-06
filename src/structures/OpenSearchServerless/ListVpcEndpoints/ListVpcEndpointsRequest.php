<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\VpcEndpointFilters|null $vpcEndpointFilters
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListVpcEndpointsRequest extends Request
{
    /**
     * @param array{
     *     vpcEndpointFilters?: Shapes\VpcEndpointFilters|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
