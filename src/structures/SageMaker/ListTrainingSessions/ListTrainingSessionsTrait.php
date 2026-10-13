<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingSessions;

trait ListTrainingSessionsTrait
{
    /**
     * @param ListTrainingSessionsRequest $args
     * @return ListTrainingSessionsResponse
     */
    public function listTrainingSessions(ListTrainingSessionsRequest $args)
    {
        $result = parent::listTrainingSessions($args->toArray());
        return new ListTrainingSessionsResponse($result->toArray());
    }
}
