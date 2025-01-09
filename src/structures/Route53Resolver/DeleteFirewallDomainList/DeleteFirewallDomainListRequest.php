<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteFirewallDomainList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallDomainListId
 */
class DeleteFirewallDomainListRequest extends Request
{
    /**
     * @param array{FirewallDomainListId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
