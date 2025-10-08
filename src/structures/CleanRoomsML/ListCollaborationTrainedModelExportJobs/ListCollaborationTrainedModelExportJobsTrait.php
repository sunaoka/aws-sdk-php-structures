<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModelExportJobs;

trait ListCollaborationTrainedModelExportJobsTrait
{
    /**
     * @param ListCollaborationTrainedModelExportJobsRequest $args
     * @return ListCollaborationTrainedModelExportJobsResponse
     */
    public function listCollaborationTrainedModelExportJobs(ListCollaborationTrainedModelExportJobsRequest $args)
    {
        $result = parent::listCollaborationTrainedModelExportJobs($args->toArray());
        return new ListCollaborationTrainedModelExportJobsResponse($result->toArray());
    }
}
