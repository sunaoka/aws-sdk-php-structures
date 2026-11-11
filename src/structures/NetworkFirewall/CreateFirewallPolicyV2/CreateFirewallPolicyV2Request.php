<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateFirewallPolicyV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallPolicyV2Name
 * @property Shapes\FirewallPolicyV2 $FirewallPolicyV2
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $DryRun
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class CreateFirewallPolicyV2Request extends Request
{
    /**
     * @param array{
     *     FirewallPolicyV2Name: string,
     *     FirewallPolicyV2: Shapes\FirewallPolicyV2,
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
