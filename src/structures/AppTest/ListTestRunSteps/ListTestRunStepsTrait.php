<?php

namespace Sunaoka\Aws\Structures\AppTest\ListTestRunSteps;

trait ListTestRunStepsTrait
{
    /**
     * @param ListTestRunStepsRequest $args
     * @return ListTestRunStepsResponse
     */
    public function listTestRunSteps(ListTestRunStepsRequest $args)
    {
        $result = parent::listTestRunSteps($args->toArray());
        return new ListTestRunStepsResponse($result->toArray());
    }
}
