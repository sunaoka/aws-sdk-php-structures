<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListFirewallDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string $firewallDomainListId
 */
class ListFirewallDomainsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     firewallDomainListId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
