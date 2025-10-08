<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs;

trait ListClassificationJobsTrait
{
    /**
     * @param ListClassificationJobsRequest $args
     * @return ListClassificationJobsResponse
     */
    public function listClassificationJobs(ListClassificationJobsRequest $args)
    {
        $result = parent::listClassificationJobs($args->toArray());
        return new ListClassificationJobsResponse($result->toArray());
    }
}
