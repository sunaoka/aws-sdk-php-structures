<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateInferenceScheduler;

trait CreateInferenceSchedulerTrait
{
    /**
     * @param CreateInferenceSchedulerRequest $args
     * @return CreateInferenceSchedulerResponse
     */
    public function createInferenceScheduler(CreateInferenceSchedulerRequest $args)
    {
        $result = parent::createInferenceScheduler($args->toArray());
        return new CreateInferenceSchedulerResponse($result->toArray());
    }
}
