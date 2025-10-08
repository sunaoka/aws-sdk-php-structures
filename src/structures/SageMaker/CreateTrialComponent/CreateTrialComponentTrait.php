<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrialComponent;

trait CreateTrialComponentTrait
{
    /**
     * @param CreateTrialComponentRequest $args
     * @return CreateTrialComponentResponse
     */
    public function createTrialComponent(CreateTrialComponentRequest $args)
    {
        $result = parent::createTrialComponent($args->toArray());
        return new CreateTrialComponentResponse($result->toArray());
    }
}
