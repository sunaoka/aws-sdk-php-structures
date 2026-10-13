<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteTrainingSession;

trait DeleteTrainingSessionTrait
{
    /**
     * @param DeleteTrainingSessionRequest $args
     * @return DeleteTrainingSessionResponse
     */
    public function deleteTrainingSession(DeleteTrainingSessionRequest $args)
    {
        $result = parent::deleteTrainingSession($args->toArray());
        return new DeleteTrainingSessionResponse($result->toArray());
    }
}
