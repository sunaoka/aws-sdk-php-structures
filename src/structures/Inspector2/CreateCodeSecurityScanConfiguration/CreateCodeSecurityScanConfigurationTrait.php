<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateCodeSecurityScanConfiguration;

trait CreateCodeSecurityScanConfigurationTrait
{
    /**
     * @param CreateCodeSecurityScanConfigurationRequest $args
     * @return CreateCodeSecurityScanConfigurationResponse
     */
    public function createCodeSecurityScanConfiguration(CreateCodeSecurityScanConfigurationRequest $args)
    {
        $result = parent::createCodeSecurityScanConfiguration($args->toArray());
        return new CreateCodeSecurityScanConfigurationResponse($result->toArray());
    }
}
