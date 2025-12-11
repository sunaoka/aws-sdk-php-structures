<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $firewallRuleId
 */
class DeleteFirewallRuleRequest extends Request
{
    /**
     * @param array{firewallRuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
