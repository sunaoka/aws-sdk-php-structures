<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallEncryptionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UpdateToken
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class UpdateFirewallEncryptionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
