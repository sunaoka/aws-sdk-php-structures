<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallPolicyV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string|null $FirewallPolicyV2Arn
 * @property string|null $FirewallPolicyV2Name
 * @property Shapes\FirewallPolicyV2 $FirewallPolicyV2
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class UpdateFirewallPolicyV2Request extends Request
{
    /**
     * @param array{
     *     UpdateToken: string,
     *     FirewallPolicyV2Arn?: string|null,
     *     FirewallPolicyV2Name?: string|null,
     *     FirewallPolicyV2: Shapes\FirewallPolicyV2,
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
