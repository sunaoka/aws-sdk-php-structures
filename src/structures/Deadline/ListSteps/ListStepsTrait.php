<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSteps;

trait ListStepsTrait
{
    /**
     * @param ListStepsRequest $args
     * @return ListStepsResponse
     */
    public function listSteps(ListStepsRequest $args)
    {
        $result = parent::listSteps($args->toArray());
        return new ListStepsResponse($result->toArray());
    }
}
