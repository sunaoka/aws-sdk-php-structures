<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string $FirewallPolicyArn
 * @property string $FirewallPolicyName
 * @property Shapes\FirewallPolicy $FirewallPolicy
 * @property string $Description
 * @property bool $DryRun
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 */
class UpdateFirewallPolicyRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken: string,
     *     FirewallPolicyArn?: string,
     *     FirewallPolicyName?: string,
     *     FirewallPolicy: Shapes\FirewallPolicy,
     *     Description?: string,
     *     DryRun?: bool,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
