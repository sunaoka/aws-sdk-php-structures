<?php

namespace Sunaoka\Aws\Structures\Panorama\ListNodeFromTemplateJobs;

trait ListNodeFromTemplateJobsTrait
{
    /**
     * @param ListNodeFromTemplateJobsRequest $args
     * @return ListNodeFromTemplateJobsResponse
     */
    public function listNodeFromTemplateJobs(ListNodeFromTemplateJobsRequest $args)
    {
        $result = parent::listNodeFromTemplateJobs($args->toArray());
        return new ListNodeFromTemplateJobsResponse($result->toArray());
    }
}
