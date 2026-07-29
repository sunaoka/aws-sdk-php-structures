<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListEnrichmentJobs;

trait ListEnrichmentJobsTrait
{
    /**
     * @param ListEnrichmentJobsRequest $args
     * @return ListEnrichmentJobsResponse
     */
    public function listEnrichmentJobs(ListEnrichmentJobsRequest $args)
    {
        $result = parent::listEnrichmentJobs($args->toArray());
        return new ListEnrichmentJobsResponse($result->toArray());
    }
}
