<?php

namespace Sunaoka\Aws\Structures\Glue\StartTrigger;

trait StartTriggerTrait
{
    /**
     * @param StartTriggerRequest $args
     * @return StartTriggerResponse
     */
    public function startTrigger(StartTriggerRequest $args)
    {
        $result = parent::startTrigger($args->toArray());
        return new StartTriggerResponse($result->toArray());
    }
}
