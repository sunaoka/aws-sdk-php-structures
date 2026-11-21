<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallEncryptionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property 'FIREWALL'|'IGW_FIREWALL'|null $FirewallType
 */
class UpdateFirewallEncryptionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     FirewallType?: 'FIREWALL'|'IGW_FIREWALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
