<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateRetrainingScheduler;

trait UpdateRetrainingSchedulerTrait
{
    /**
     * @param UpdateRetrainingSchedulerRequest $args
     * @return void
     */
    public function updateRetrainingScheduler(UpdateRetrainingSchedulerRequest $args)
    {
        parent::updateRetrainingScheduler($args->toArray());
    }
}
