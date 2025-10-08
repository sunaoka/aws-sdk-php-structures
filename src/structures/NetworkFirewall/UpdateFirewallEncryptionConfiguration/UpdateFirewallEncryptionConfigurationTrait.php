<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallEncryptionConfiguration;

trait UpdateFirewallEncryptionConfigurationTrait
{
    /**
     * @param UpdateFirewallEncryptionConfigurationRequest $args
     * @return UpdateFirewallEncryptionConfigurationResponse
     */
    public function updateFirewallEncryptionConfiguration(UpdateFirewallEncryptionConfigurationRequest $args)
    {
        $result = parent::updateFirewallEncryptionConfiguration($args->toArray());
        return new UpdateFirewallEncryptionConfigurationResponse($result->toArray());
    }
}
