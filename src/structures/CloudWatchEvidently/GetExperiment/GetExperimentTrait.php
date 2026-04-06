<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetExperiment;

trait GetExperimentTrait
{
    /**
     * @param GetExperimentRequest $args
     * @return GetExperimentResponse
     */
    public function getExperiment(GetExperimentRequest $args)
    {
        $result = parent::getExperiment($args->toArray());
        return new GetExperimentResponse($result->toArray());
    }
}
