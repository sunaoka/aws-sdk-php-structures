<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAccessControlApplications;

trait ListAccessControlApplicationsTrait
{
    /**
     * @param ListAccessControlApplicationsRequest $args
     * @return ListAccessControlApplicationsResponse
     */
    public function listAccessControlApplications(ListAccessControlApplicationsRequest $args)
    {
        $result = parent::listAccessControlApplications($args->toArray());
        return new ListAccessControlApplicationsResponse($result->toArray());
    }
}
