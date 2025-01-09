<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetFirewallDomainList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallDomainListId
 */
class GetFirewallDomainListRequest extends Request
{
    /**
     * @param array{FirewallDomainListId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
