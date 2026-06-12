<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateTrigger;

trait UpdateTriggerTrait
{
    /**
     * @param UpdateTriggerRequest $args
     * @return UpdateTriggerResponse
     */
    public function updateTrigger(UpdateTriggerRequest $args)
    {
        $result = parent::updateTrigger($args->toArray());
        return new UpdateTriggerResponse($result->toArray());
    }
}
