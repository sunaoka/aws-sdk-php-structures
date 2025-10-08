<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTrigger;

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
