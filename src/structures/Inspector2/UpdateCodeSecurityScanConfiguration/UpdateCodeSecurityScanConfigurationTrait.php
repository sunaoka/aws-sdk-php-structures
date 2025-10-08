<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityScanConfiguration;

trait UpdateCodeSecurityScanConfigurationTrait
{
    /**
     * @param UpdateCodeSecurityScanConfigurationRequest $args
     * @return UpdateCodeSecurityScanConfigurationResponse
     */
    public function updateCodeSecurityScanConfiguration(UpdateCodeSecurityScanConfigurationRequest $args)
    {
        $result = parent::updateCodeSecurityScanConfiguration($args->toArray());
        return new UpdateCodeSecurityScanConfigurationResponse($result->toArray());
    }
}
