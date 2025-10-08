<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\CreateRetrainingScheduler;

trait CreateRetrainingSchedulerTrait
{
    /**
     * @param CreateRetrainingSchedulerRequest $args
     * @return CreateRetrainingSchedulerResponse
     */
    public function createRetrainingScheduler(CreateRetrainingSchedulerRequest $args)
    {
        $result = parent::createRetrainingScheduler($args->toArray());
        return new CreateRetrainingSchedulerResponse($result->toArray());
    }
}
