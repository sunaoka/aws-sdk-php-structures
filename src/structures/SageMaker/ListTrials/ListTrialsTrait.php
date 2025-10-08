<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrials;

trait ListTrialsTrait
{
    /**
     * @param ListTrialsRequest $args
     * @return ListTrialsResponse
     */
    public function listTrials(ListTrialsRequest $args)
    {
        $result = parent::listTrials($args->toArray());
        return new ListTrialsResponse($result->toArray());
    }
}
