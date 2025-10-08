<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchDisassociateCodeSecurityScanConfiguration;

trait BatchDisassociateCodeSecurityScanConfigurationTrait
{
    /**
     * @param BatchDisassociateCodeSecurityScanConfigurationRequest $args
     * @return BatchDisassociateCodeSecurityScanConfigurationResponse
     */
    public function batchDisassociateCodeSecurityScanConfiguration(
        BatchDisassociateCodeSecurityScanConfigurationRequest $args,
    ) {
        $result = parent::batchDisassociateCodeSecurityScanConfiguration($args->toArray());
        return new BatchDisassociateCodeSecurityScanConfigurationResponse($result->toArray());
    }
}
