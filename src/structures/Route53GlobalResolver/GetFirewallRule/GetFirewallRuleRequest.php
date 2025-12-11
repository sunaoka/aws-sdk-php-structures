<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetFirewallRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $firewallRuleId
 */
class GetFirewallRuleRequest extends Request
{
    /**
     * @param array{firewallRuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
