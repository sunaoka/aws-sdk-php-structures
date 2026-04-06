<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetCodeSecurityScanConfiguration;

trait GetCodeSecurityScanConfigurationTrait
{
    /**
     * @param GetCodeSecurityScanConfigurationRequest $args
     * @return GetCodeSecurityScanConfigurationResponse
     */
    public function getCodeSecurityScanConfiguration(GetCodeSecurityScanConfigurationRequest $args)
    {
        $result = parent::getCodeSecurityScanConfiguration($args->toArray());
        return new GetCodeSecurityScanConfigurationResponse($result->toArray());
    }
}
