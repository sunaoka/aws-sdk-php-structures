<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentRun;

trait UpdateExperimentRunTrait
{
    /**
     * @param UpdateExperimentRunRequest $args
     * @return UpdateExperimentRunResponse
     */
    public function updateExperimentRun(UpdateExperimentRunRequest $args)
    {
        $result = parent::updateExperimentRun($args->toArray());
        return new UpdateExperimentRunResponse($result->toArray());
    }
}
