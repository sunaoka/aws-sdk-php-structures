<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ImportFirewallDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallDomainListId
 * @property 'REPLACE' $Operation
 * @property string $DomainFileUrl
 */
class ImportFirewallDomainsRequest extends Request
{
    /**
     * @param array{
     *     FirewallDomainListId: string,
     *     Operation: 'REPLACE',
     *     DomainFileUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
