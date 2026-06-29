<?php

namespace Sunaoka\Aws\Structures\AppConfig\StartExperimentRun;

trait StartExperimentRunTrait
{
    /**
     * @param StartExperimentRunRequest $args
     * @return StartExperimentRunResponse
     */
    public function startExperimentRun(StartExperimentRunRequest $args)
    {
        $result = parent::startExperimentRun($args->toArray());
        return new StartExperimentRunResponse($result->toArray());
    }
}
