<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateFirewallDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $domains
 * @property string $firewallDomainListId
 * @property string $operation
 */
class UpdateFirewallDomainsRequest extends Request
{
    /**
     * @param array{
     *     domains: list<string>,
     *     firewallDomainListId: string,
     *     operation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
