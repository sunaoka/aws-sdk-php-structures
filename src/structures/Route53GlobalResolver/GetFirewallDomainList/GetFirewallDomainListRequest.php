<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetFirewallDomainList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $firewallDomainListId
 */
class GetFirewallDomainListRequest extends Request
{
    /**
     * @param array{firewallDomainListId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
