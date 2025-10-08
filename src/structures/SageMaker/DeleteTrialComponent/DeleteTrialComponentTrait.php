<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteTrialComponent;

trait DeleteTrialComponentTrait
{
    /**
     * @param DeleteTrialComponentRequest $args
     * @return DeleteTrialComponentResponse
     */
    public function deleteTrialComponent(DeleteTrialComponentRequest $args)
    {
        $result = parent::deleteTrialComponent($args->toArray());
        return new DeleteTrialComponentResponse($result->toArray());
    }
}
