<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallPolicyName
 * @property Shapes\FirewallPolicy $FirewallPolicy
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $DryRun
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class CreateFirewallPolicyRequest extends Request
{
    /**
     * @param array{
     *     FirewallPolicyName: string,
     *     FirewallPolicy: Shapes\FirewallPolicy,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DryRun?: bool|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
