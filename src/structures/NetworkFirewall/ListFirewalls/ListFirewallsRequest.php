<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFirewalls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property list<string>|null $VpcIds
 * @property int<1, 100>|null $MaxResults
 */
class ListFirewallsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     VpcIds?: list<string>|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
