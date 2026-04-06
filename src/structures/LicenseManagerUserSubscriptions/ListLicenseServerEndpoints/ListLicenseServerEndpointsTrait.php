<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListLicenseServerEndpoints;

trait ListLicenseServerEndpointsTrait
{
    /**
     * @param ListLicenseServerEndpointsRequest $args
     * @return ListLicenseServerEndpointsResponse
     */
    public function listLicenseServerEndpoints(ListLicenseServerEndpointsRequest $args)
    {
        $result = parent::listLicenseServerEndpoints($args->toArray());
        return new ListLicenseServerEndpointsResponse($result->toArray());
    }
}
