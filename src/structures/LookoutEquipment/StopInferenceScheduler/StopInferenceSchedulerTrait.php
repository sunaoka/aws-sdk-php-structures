<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StopInferenceScheduler;

trait StopInferenceSchedulerTrait
{
    /**
     * @param StopInferenceSchedulerRequest $args
     * @return StopInferenceSchedulerResponse
     */
    public function stopInferenceScheduler(StopInferenceSchedulerRequest $args)
    {
        $result = parent::stopInferenceScheduler($args->toArray());
        return new StopInferenceSchedulerResponse($result->toArray());
    }
}
