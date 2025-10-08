<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityScanConfigurationAssociations;

trait ListCodeSecurityScanConfigurationAssociationsTrait
{
    /**
     * @param ListCodeSecurityScanConfigurationAssociationsRequest $args
     * @return ListCodeSecurityScanConfigurationAssociationsResponse
     */
    public function listCodeSecurityScanConfigurationAssociations(
        ListCodeSecurityScanConfigurationAssociationsRequest $args,
    ) {
        $result = parent::listCodeSecurityScanConfigurationAssociations($args->toArray());
        return new ListCodeSecurityScanConfigurationAssociationsResponse($result->toArray());
    }
}
