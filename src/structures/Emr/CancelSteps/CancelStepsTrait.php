<?php

namespace Sunaoka\Aws\Structures\Emr\CancelSteps;

trait CancelStepsTrait
{
    /**
     * @param CancelStepsRequest $args
     * @return CancelStepsResponse
     */
    public function cancelSteps(CancelStepsRequest $args)
    {
        $result = parent::cancelSteps($args->toArray());
        return new CancelStepsResponse($result->toArray());
    }
}
