<?php

namespace Sunaoka\Aws\Structures\FIS\StartExperiment;

trait StartExperimentTrait
{
    /**
     * @param StartExperimentRequest $args
     * @return StartExperimentResponse
     */
    public function startExperiment(StartExperimentRequest $args)
    {
        $result = parent::startExperiment($args->toArray());
        return new StartExperimentResponse($result->toArray());
    }
}
