<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteRetrainingScheduler;

trait DeleteRetrainingSchedulerTrait
{
    /**
     * @param DeleteRetrainingSchedulerRequest $args
     * @return void
     */
    public function deleteRetrainingScheduler(DeleteRetrainingSchedulerRequest $args)
    {
        parent::deleteRetrainingScheduler($args->toArray());
    }
}
