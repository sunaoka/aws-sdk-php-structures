<?php

namespace Sunaoka\Aws\Structures\Glue\StopTrigger;

trait StopTriggerTrait
{
    /**
     * @param StopTriggerRequest $args
     * @return StopTriggerResponse
     */
    public function stopTrigger(StopTriggerRequest $args)
    {
        $result = parent::stopTrigger($args->toArray());
        return new StopTriggerResponse($result->toArray());
    }
}
