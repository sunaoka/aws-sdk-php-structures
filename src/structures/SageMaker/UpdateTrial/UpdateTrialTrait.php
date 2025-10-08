<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrial;

trait UpdateTrialTrait
{
    /**
     * @param UpdateTrialRequest $args
     * @return UpdateTrialResponse
     */
    public function updateTrial(UpdateTrialRequest $args)
    {
        $result = parent::updateTrial($args->toArray());
        return new UpdateTrialResponse($result->toArray());
    }
}
