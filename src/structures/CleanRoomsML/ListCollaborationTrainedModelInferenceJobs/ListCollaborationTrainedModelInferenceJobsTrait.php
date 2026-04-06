<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModelInferenceJobs;

trait ListCollaborationTrainedModelInferenceJobsTrait
{
    /**
     * @param ListCollaborationTrainedModelInferenceJobsRequest $args
     * @return ListCollaborationTrainedModelInferenceJobsResponse
     */
    public function listCollaborationTrainedModelInferenceJobs(ListCollaborationTrainedModelInferenceJobsRequest $args)
    {
        $result = parent::listCollaborationTrainedModelInferenceJobs($args->toArray());
        return new ListCollaborationTrainedModelInferenceJobsResponse($result->toArray());
    }
}
