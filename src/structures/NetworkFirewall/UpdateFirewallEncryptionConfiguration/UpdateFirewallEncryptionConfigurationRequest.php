<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallEncryptionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UpdateToken
 * @property string $FirewallArn
 * @property string $FirewallName
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 */
class UpdateFirewallEncryptionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     UpdateToken?: string,
     *     FirewallArn?: string,
     *     FirewallName?: string,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
