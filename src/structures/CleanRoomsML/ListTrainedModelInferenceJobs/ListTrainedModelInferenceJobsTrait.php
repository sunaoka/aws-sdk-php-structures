<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainedModelInferenceJobs;

trait ListTrainedModelInferenceJobsTrait
{
    /**
     * @param ListTrainedModelInferenceJobsRequest $args
     * @return ListTrainedModelInferenceJobsResponse
     */
    public function listTrainedModelInferenceJobs(ListTrainedModelInferenceJobsRequest $args)
    {
        $result = parent::listTrainedModelInferenceJobs($args->toArray());
        return new ListTrainedModelInferenceJobsResponse($result->toArray());
    }
}
