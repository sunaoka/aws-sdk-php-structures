<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplications;

trait BatchGetApplicationsTrait
{
    /**
     * @param BatchGetApplicationsRequest $args
     * @return BatchGetApplicationsResponse
     */
    public function batchGetApplications(BatchGetApplicationsRequest $args)
    {
        $result = parent::batchGetApplications($args->toArray());
        return new BatchGetApplicationsResponse($result->toArray());
    }
}
