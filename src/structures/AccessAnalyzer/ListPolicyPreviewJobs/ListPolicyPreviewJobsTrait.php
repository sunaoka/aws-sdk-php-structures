<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListPolicyPreviewJobs;

trait ListPolicyPreviewJobsTrait
{
    /**
     * @param ListPolicyPreviewJobsRequest $args
     * @return ListPolicyPreviewJobsResponse
     */
    public function listPolicyPreviewJobs(ListPolicyPreviewJobsRequest $args)
    {
        $result = parent::listPolicyPreviewJobs($args->toArray());
        return new ListPolicyPreviewJobsResponse($result->toArray());
    }
}
