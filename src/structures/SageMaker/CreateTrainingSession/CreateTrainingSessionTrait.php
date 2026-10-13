<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingSession;

trait CreateTrainingSessionTrait
{
    /**
     * @param CreateTrainingSessionRequest $args
     * @return CreateTrainingSessionResponse
     */
    public function createTrainingSession(CreateTrainingSessionRequest $args)
    {
        $result = parent::createTrainingSession($args->toArray());
        return new CreateTrainingSessionResponse($result->toArray());
    }
}
