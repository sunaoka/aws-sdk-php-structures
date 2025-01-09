<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFirewalls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property list<string> $VpcIds
 * @property int<1, 100> $MaxResults
 */
class ListFirewallsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     VpcIds?: list<string>,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
