<?php

namespace Sunaoka\Aws\Structures\Glue\GetTrigger;

trait GetTriggerTrait
{
    /**
     * @param GetTriggerRequest $args
     * @return GetTriggerResponse
     */
    public function getTrigger(GetTriggerRequest $args)
    {
        $result = parent::getTrigger($args->toArray());
        return new GetTriggerResponse($result->toArray());
    }
}
