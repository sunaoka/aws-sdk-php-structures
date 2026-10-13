<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopTrainingSession;

trait StopTrainingSessionTrait
{
    /**
     * @param StopTrainingSessionRequest $args
     * @return StopTrainingSessionResponse
     */
    public function stopTrainingSession(StopTrainingSessionRequest $args)
    {
        $result = parent::stopTrainingSession($args->toArray());
        return new StopTrainingSessionResponse($result->toArray());
    }
}
