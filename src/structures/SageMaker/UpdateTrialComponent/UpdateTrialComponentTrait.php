<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateTrialComponent;

trait UpdateTrialComponentTrait
{
    /**
     * @param UpdateTrialComponentRequest $args
     * @return UpdateTrialComponentResponse
     */
    public function updateTrialComponent(UpdateTrialComponentRequest $args)
    {
        $result = parent::updateTrialComponent($args->toArray());
        return new UpdateTrialComponentResponse($result->toArray());
    }
}
