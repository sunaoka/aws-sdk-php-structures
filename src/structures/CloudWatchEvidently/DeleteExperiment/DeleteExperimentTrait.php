<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteExperiment;

trait DeleteExperimentTrait
{
    /**
     * @param DeleteExperimentRequest $args
     * @return DeleteExperimentResponse
     */
    public function deleteExperiment(DeleteExperimentRequest $args)
    {
        $result = parent::deleteExperiment($args->toArray());
        return new DeleteExperimentResponse($result->toArray());
    }
}
