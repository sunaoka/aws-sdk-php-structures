<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateAccountAuditConfiguration;

trait UpdateAccountAuditConfigurationTrait
{
    /**
     * @param UpdateAccountAuditConfigurationRequest $args
     * @return UpdateAccountAuditConfigurationResponse
     */
    public function updateAccountAuditConfiguration(UpdateAccountAuditConfigurationRequest $args)
    {
        $result = parent::updateAccountAuditConfiguration($args->toArray());
        return new UpdateAccountAuditConfigurationResponse($result->toArray());
    }
}
