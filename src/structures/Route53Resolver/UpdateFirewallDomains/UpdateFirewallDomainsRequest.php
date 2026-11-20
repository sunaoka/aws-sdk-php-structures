<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateFirewallDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallDomainListId
 * @property 'ADD'|'REMOVE'|'REPLACE'|'DENY' $Operation
 * @property list<string> $Domains
 */
class UpdateFirewallDomainsRequest extends Request
{
    /**
     * @param array{
     *     FirewallDomainListId: string,
     *     Operation: 'ADD'|'REMOVE'|'REPLACE'|'DENY',
     *     Domains: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
