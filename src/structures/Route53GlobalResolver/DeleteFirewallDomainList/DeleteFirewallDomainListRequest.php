<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteFirewallDomainList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $firewallDomainListId
 */
class DeleteFirewallDomainListRequest extends Request
{
    /**
     * @param array{firewallDomainListId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
