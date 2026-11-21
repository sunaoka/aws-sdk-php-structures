<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFirewalls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property list<string>|null $VpcIds
 * @property int<1, 100>|null $MaxResults
 * @property 'FIREWALL'|'IGW_FIREWALL'|null $FirewallType
 */
class ListFirewallsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     VpcIds?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     FirewallType?: 'FIREWALL'|'IGW_FIREWALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
