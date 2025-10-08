<?php

namespace Sunaoka\Aws\Structures\Iot\GetBehaviorModelTrainingSummaries;

trait GetBehaviorModelTrainingSummariesTrait
{
    /**
     * @param GetBehaviorModelTrainingSummariesRequest $args
     * @return GetBehaviorModelTrainingSummariesResponse
     */
    public function getBehaviorModelTrainingSummaries(GetBehaviorModelTrainingSummariesRequest $args)
    {
        $result = parent::getBehaviorModelTrainingSummaries($args->toArray());
        return new GetBehaviorModelTrainingSummariesResponse($result->toArray());
    }
}
