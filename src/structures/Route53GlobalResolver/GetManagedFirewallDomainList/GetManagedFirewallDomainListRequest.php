<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetManagedFirewallDomainList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedFirewallDomainListId
 */
class GetManagedFirewallDomainListRequest extends Request
{
    /**
     * @param array{managedFirewallDomainListId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
