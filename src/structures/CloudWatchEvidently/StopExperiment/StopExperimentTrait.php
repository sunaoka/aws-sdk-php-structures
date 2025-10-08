<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\StopExperiment;

trait StopExperimentTrait
{
    /**
     * @param StopExperimentRequest $args
     * @return StopExperimentResponse
     */
    public function stopExperiment(StopExperimentRequest $args)
    {
        $result = parent::stopExperiment($args->toArray());
        return new StopExperimentResponse($result->toArray());
    }
}
