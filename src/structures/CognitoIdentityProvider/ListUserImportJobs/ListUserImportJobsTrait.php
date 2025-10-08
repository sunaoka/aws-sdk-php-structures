<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserImportJobs;

trait ListUserImportJobsTrait
{
    /**
     * @param ListUserImportJobsRequest $args
     * @return ListUserImportJobsResponse
     */
    public function listUserImportJobs(ListUserImportJobsRequest $args)
    {
        $result = parent::listUserImportJobs($args->toArray());
        return new ListUserImportJobsResponse($result->toArray());
    }
}
