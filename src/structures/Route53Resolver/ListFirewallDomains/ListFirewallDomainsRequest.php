<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallDomainListId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListFirewallDomainsRequest extends Request
{
    /**
     * @param array{
     *     FirewallDomainListId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
