<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListFailuresForLicenseConfigurationOperations;

trait ListFailuresForLicenseConfigurationOperationsTrait
{
    /**
     * @param ListFailuresForLicenseConfigurationOperationsRequest $args
     * @return ListFailuresForLicenseConfigurationOperationsResponse
     */
    public function listFailuresForLicenseConfigurationOperations(ListFailuresForLicenseConfigurationOperationsRequest $args)
    {
        $result = parent::listFailuresForLicenseConfigurationOperations($args->toArray());
        return new ListFailuresForLicenseConfigurationOperationsResponse($result->toArray());
    }
}
