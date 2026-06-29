<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetExperimentRun;

trait GetExperimentRunTrait
{
    /**
     * @param GetExperimentRunRequest $args
     * @return GetExperimentRunResponse
     */
    public function getExperimentRun(GetExperimentRunRequest $args)
    {
        $result = parent::getExperimentRun($args->toArray());
        return new GetExperimentRunResponse($result->toArray());
    }
}
