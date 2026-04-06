<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfileApplications;

trait ListSecurityProfileApplicationsTrait
{
    /**
     * @param ListSecurityProfileApplicationsRequest $args
     * @return ListSecurityProfileApplicationsResponse
     */
    public function listSecurityProfileApplications(ListSecurityProfileApplicationsRequest $args)
    {
        $result = parent::listSecurityProfileApplications($args->toArray());
        return new ListSecurityProfileApplicationsResponse($result->toArray());
    }
}
