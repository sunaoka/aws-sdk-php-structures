<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteAccountAuditConfiguration;

trait DeleteAccountAuditConfigurationTrait
{
    /**
     * @param DeleteAccountAuditConfigurationRequest $args
     * @return DeleteAccountAuditConfigurationResponse
     */
    public function deleteAccountAuditConfiguration(DeleteAccountAuditConfigurationRequest $args)
    {
        $result = parent::deleteAccountAuditConfiguration($args->toArray());
        return new DeleteAccountAuditConfigurationResponse($result->toArray());
    }
}
