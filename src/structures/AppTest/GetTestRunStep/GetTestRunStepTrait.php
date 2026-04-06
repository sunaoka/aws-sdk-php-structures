<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep;

trait GetTestRunStepTrait
{
    /**
     * @param GetTestRunStepRequest $args
     * @return GetTestRunStepResponse
     */
    public function getTestRunStep(GetTestRunStepRequest $args)
    {
        $result = parent::getTestRunStep($args->toArray());
        return new GetTestRunStepResponse($result->toArray());
    }
}
