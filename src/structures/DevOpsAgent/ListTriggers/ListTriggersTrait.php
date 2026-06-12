<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListTriggers;

trait ListTriggersTrait
{
    /**
     * @param ListTriggersRequest $args
     * @return ListTriggersResponse
     */
    public function listTriggers(ListTriggersRequest $args)
    {
        $result = parent::listTriggers($args->toArray());
        return new ListTriggersResponse($result->toArray());
    }
}
