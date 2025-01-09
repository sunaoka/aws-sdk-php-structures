<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallPolicyName
 * @property Shapes\FirewallPolicy $FirewallPolicy
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property bool $DryRun
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 */
class CreateFirewallPolicyRequest extends Request
{
    /**
     * @param array{
     *     FirewallPolicyName: string,
     *     FirewallPolicy: Shapes\FirewallPolicy,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>,
     *     DryRun?: bool,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
