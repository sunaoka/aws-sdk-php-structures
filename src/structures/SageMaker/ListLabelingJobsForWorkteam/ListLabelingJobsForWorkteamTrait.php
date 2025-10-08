<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobsForWorkteam;

trait ListLabelingJobsForWorkteamTrait
{
    /**
     * @param ListLabelingJobsForWorkteamRequest $args
     * @return ListLabelingJobsForWorkteamResponse
     */
    public function listLabelingJobsForWorkteam(ListLabelingJobsForWorkteamRequest $args)
    {
        $result = parent::listLabelingJobsForWorkteam($args->toArray());
        return new ListLabelingJobsForWorkteamResponse($result->toArray());
    }
}
