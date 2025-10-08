<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StopRetrainingScheduler;

trait StopRetrainingSchedulerTrait
{
    /**
     * @param StopRetrainingSchedulerRequest $args
     * @return StopRetrainingSchedulerResponse
     */
    public function stopRetrainingScheduler(StopRetrainingSchedulerRequest $args)
    {
        $result = parent::stopRetrainingScheduler($args->toArray());
        return new StopRetrainingSchedulerResponse($result->toArray());
    }
}
