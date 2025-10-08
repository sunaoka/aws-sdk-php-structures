<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCandidatesForAutoMLJob;

trait ListCandidatesForAutoMLJobTrait
{
    /**
     * @param ListCandidatesForAutoMLJobRequest $args
     * @return ListCandidatesForAutoMLJobResponse
     */
    public function listCandidatesForAutoMLJob(ListCandidatesForAutoMLJobRequest $args)
    {
        $result = parent::listCandidatesForAutoMLJob($args->toArray());
        return new ListCandidatesForAutoMLJobResponse($result->toArray());
    }
}
