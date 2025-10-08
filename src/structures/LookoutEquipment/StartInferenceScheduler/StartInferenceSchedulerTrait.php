<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartInferenceScheduler;

trait StartInferenceSchedulerTrait
{
    /**
     * @param StartInferenceSchedulerRequest $args
     * @return StartInferenceSchedulerResponse
     */
    public function startInferenceScheduler(StartInferenceSchedulerRequest $args)
    {
        $result = parent::startInferenceScheduler($args->toArray());
        return new StartInferenceSchedulerResponse($result->toArray());
    }
}
