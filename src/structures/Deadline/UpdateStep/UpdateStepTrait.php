<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateStep;

trait UpdateStepTrait
{
    /**
     * @param UpdateStepRequest $args
     * @return UpdateStepResponse
     */
    public function updateStep(UpdateStepRequest $args)
    {
        $result = parent::updateStep($args->toArray());
        return new UpdateStepResponse($result->toArray());
    }
}
