<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateGroupCertificateConfiguration;

trait UpdateGroupCertificateConfigurationTrait
{
    /**
     * @param UpdateGroupCertificateConfigurationRequest $args
     * @return UpdateGroupCertificateConfigurationResponse
     */
    public function updateGroupCertificateConfiguration(UpdateGroupCertificateConfigurationRequest $args)
    {
        $result = parent::updateGroupCertificateConfiguration($args->toArray());
        return new UpdateGroupCertificateConfigurationResponse($result->toArray());
    }
}
