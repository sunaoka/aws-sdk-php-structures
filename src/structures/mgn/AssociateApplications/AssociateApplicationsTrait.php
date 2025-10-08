<?php

namespace Sunaoka\Aws\Structures\mgn\AssociateApplications;

trait AssociateApplicationsTrait
{
    /**
     * @param AssociateApplicationsRequest $args
     * @return AssociateApplicationsResponse
     */
    public function associateApplications(AssociateApplicationsRequest $args)
    {
        $result = parent::associateApplications($args->toArray());
        return new AssociateApplicationsResponse($result->toArray());
    }
}
