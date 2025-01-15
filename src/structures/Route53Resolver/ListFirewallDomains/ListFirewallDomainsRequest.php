<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListFirewallDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallDomainListId
 * @property int<1, 5000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListFirewallDomainsRequest extends Request
{
    /**
     * @param array{
     *     FirewallDomainListId: string,
     *     MaxResults?: int<1, 5000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
