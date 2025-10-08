<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DeleteInferenceScheduler;

trait DeleteInferenceSchedulerTrait
{
    /**
     * @param DeleteInferenceSchedulerRequest $args
     * @return void
     */
    public function deleteInferenceScheduler(DeleteInferenceSchedulerRequest $args)
    {
        parent::deleteInferenceScheduler($args->toArray());
    }
}
