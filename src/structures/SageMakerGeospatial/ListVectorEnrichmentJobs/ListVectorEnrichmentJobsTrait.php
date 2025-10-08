<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListVectorEnrichmentJobs;

trait ListVectorEnrichmentJobsTrait
{
    /**
     * @param ListVectorEnrichmentJobsRequest $args
     * @return ListVectorEnrichmentJobsResponse
     */
    public function listVectorEnrichmentJobs(ListVectorEnrichmentJobsRequest $args)
    {
        $result = parent::listVectorEnrichmentJobs($args->toArray());
        return new ListVectorEnrichmentJobsResponse($result->toArray());
    }
}
