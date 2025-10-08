<?php

namespace Sunaoka\Aws\Structures\Inspector2\DeleteCodeSecurityScanConfiguration;

trait DeleteCodeSecurityScanConfigurationTrait
{
    /**
     * @param DeleteCodeSecurityScanConfigurationRequest $args
     * @return DeleteCodeSecurityScanConfigurationResponse
     */
    public function deleteCodeSecurityScanConfiguration(DeleteCodeSecurityScanConfigurationRequest $args)
    {
        $result = parent::deleteCodeSecurityScanConfiguration($args->toArray());
        return new DeleteCodeSecurityScanConfigurationResponse($result->toArray());
    }
}
