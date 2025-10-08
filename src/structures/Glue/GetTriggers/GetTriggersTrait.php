<?php

namespace Sunaoka\Aws\Structures\Glue\GetTriggers;

trait GetTriggersTrait
{
    /**
     * @param GetTriggersRequest $args
     * @return GetTriggersResponse
     */
    public function getTriggers(GetTriggersRequest $args)
    {
        $result = parent::getTriggers($args->toArray());
        return new GetTriggersResponse($result->toArray());
    }
}
