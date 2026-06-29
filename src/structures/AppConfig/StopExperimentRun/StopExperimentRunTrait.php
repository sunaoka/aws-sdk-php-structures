<?php

namespace Sunaoka\Aws\Structures\AppConfig\StopExperimentRun;

trait StopExperimentRunTrait
{
    /**
     * @param StopExperimentRunRequest $args
     * @return StopExperimentRunResponse
     */
    public function stopExperimentRun(StopExperimentRunRequest $args)
    {
        $result = parent::stopExperimentRun($args->toArray());
        return new StopExperimentRunResponse($result->toArray());
    }
}
