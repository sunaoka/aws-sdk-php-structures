<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep;

trait GetStepTrait
{
    /**
     * @param GetStepRequest $args
     * @return GetStepResponse
     */
    public function getStep(GetStepRequest $args)
    {
        $result = parent::getStep($args->toArray());
        return new GetStepResponse($result->toArray());
    }
}
