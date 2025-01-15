<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string|null $FirewallPolicyArn
 * @property string|null $FirewallPolicyName
 * @property Shapes\FirewallPolicy $FirewallPolicy
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class UpdateFirewallPolicyRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken: string,
     *     FirewallPolicyArn?: string|null,
     *     FirewallPolicyName?: string|null,
     *     FirewallPolicy: Shapes\FirewallPolicy,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
