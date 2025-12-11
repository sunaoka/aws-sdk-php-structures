<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ImportFirewallDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainFileUrl
 * @property string $firewallDomainListId
 * @property string $operation
 */
class ImportFirewallDomainsRequest extends Request
{
    /**
     * @param array{
     *     domainFileUrl: string,
     *     firewallDomainListId: string,
     *     operation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
