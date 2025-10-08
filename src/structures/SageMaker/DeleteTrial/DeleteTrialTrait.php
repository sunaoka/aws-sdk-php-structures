<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteTrial;

trait DeleteTrialTrait
{
    /**
     * @param DeleteTrialRequest $args
     * @return DeleteTrialResponse
     */
    public function deleteTrial(DeleteTrialRequest $args)
    {
        $result = parent::deleteTrial($args->toArray());
        return new DeleteTrialResponse($result->toArray());
    }
}
