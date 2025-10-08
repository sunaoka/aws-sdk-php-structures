<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\StartRetrainingScheduler;

trait StartRetrainingSchedulerTrait
{
    /**
     * @param StartRetrainingSchedulerRequest $args
     * @return StartRetrainingSchedulerResponse
     */
    public function startRetrainingScheduler(StartRetrainingSchedulerRequest $args)
    {
        $result = parent::startRetrainingScheduler($args->toArray());
        return new StartRetrainingSchedulerResponse($result->toArray());
    }
}
