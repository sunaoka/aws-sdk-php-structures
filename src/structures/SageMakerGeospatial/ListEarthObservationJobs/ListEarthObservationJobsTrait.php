<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListEarthObservationJobs;

trait ListEarthObservationJobsTrait
{
    /**
     * @param ListEarthObservationJobsRequest $args
     * @return ListEarthObservationJobsResponse
     */
    public function listEarthObservationJobs(ListEarthObservationJobsRequest $args)
    {
        $result = parent::listEarthObservationJobs($args->toArray());
        return new ListEarthObservationJobsResponse($result->toArray());
    }
}
