<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityScanConfigurations;

trait ListCodeSecurityScanConfigurationsTrait
{
    /**
     * @param ListCodeSecurityScanConfigurationsRequest $args
     * @return ListCodeSecurityScanConfigurationsResponse
     */
    public function listCodeSecurityScanConfigurations(ListCodeSecurityScanConfigurationsRequest $args)
    {
        $result = parent::listCodeSecurityScanConfigurations($args->toArray());
        return new ListCodeSecurityScanConfigurationsResponse($result->toArray());
    }
}
