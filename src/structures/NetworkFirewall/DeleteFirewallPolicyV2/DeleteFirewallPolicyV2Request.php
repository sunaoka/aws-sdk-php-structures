<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewallPolicyV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallPolicyV2Arn
 * @property string|null $FirewallPolicyV2Name
 */
class DeleteFirewallPolicyV2Request extends Request
{
    /**
     * @param array{
     *     FirewallPolicyV2Arn?: string|null,
     *     FirewallPolicyV2Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
