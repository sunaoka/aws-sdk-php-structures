<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchAssociateCodeSecurityScanConfiguration;

trait BatchAssociateCodeSecurityScanConfigurationTrait
{
    /**
     * @param BatchAssociateCodeSecurityScanConfigurationRequest $args
     * @return BatchAssociateCodeSecurityScanConfigurationResponse
     */
    public function batchAssociateCodeSecurityScanConfiguration(
        BatchAssociateCodeSecurityScanConfigurationRequest $args,
    ) {
        $result = parent::batchAssociateCodeSecurityScanConfiguration($args->toArray());
        return new BatchAssociateCodeSecurityScanConfigurationResponse($result->toArray());
    }
}
