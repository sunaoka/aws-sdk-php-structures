<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListVpcEndpointAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $FirewallArn
 */
class ListVpcEndpointAssociationsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     FirewallArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
