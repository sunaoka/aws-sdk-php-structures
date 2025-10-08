<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\UpdateInferenceScheduler;

trait UpdateInferenceSchedulerTrait
{
    /**
     * @param UpdateInferenceSchedulerRequest $args
     * @return void
     */
    public function updateInferenceScheduler(UpdateInferenceSchedulerRequest $args)
    {
        parent::updateInferenceScheduler($args->toArray());
    }
}
