<?php

namespace Sunaoka\Aws\Structures\Deadline\ListLicenseEndpoints;

trait ListLicenseEndpointsTrait
{
    /**
     * @param ListLicenseEndpointsRequest $args
     * @return ListLicenseEndpointsResponse
     */
    public function listLicenseEndpoints(ListLicenseEndpointsRequest $args)
    {
        $result = parent::listLicenseEndpoints($args->toArray());
        return new ListLicenseEndpointsResponse($result->toArray());
    }
}
