<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetGroupCertificateConfiguration;

trait GetGroupCertificateConfigurationTrait
{
    /**
     * @param GetGroupCertificateConfigurationRequest $args
     * @return GetGroupCertificateConfigurationResponse
     */
    public function getGroupCertificateConfiguration(GetGroupCertificateConfigurationRequest $args)
    {
        $result = parent::getGroupCertificateConfiguration($args->toArray());
        return new GetGroupCertificateConfigurationResponse($result->toArray());
    }
}
