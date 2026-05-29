<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListOAuthClientApplications;

trait ListOAuthClientApplicationsTrait
{
    /**
     * @param ListOAuthClientApplicationsRequest $args
     * @return ListOAuthClientApplicationsResponse
     */
    public function listOAuthClientApplications(ListOAuthClientApplicationsRequest $args)
    {
        $result = parent::listOAuthClientApplications($args->toArray());
        return new ListOAuthClientApplicationsResponse($result->toArray());
    }
}
