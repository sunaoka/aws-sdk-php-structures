<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrial;

trait CreateTrialTrait
{
    /**
     * @param CreateTrialRequest $args
     * @return CreateTrialResponse
     */
    public function createTrial(CreateTrialRequest $args)
    {
        $result = parent::createTrial($args->toArray());
        return new CreateTrialResponse($result->toArray());
    }
}
