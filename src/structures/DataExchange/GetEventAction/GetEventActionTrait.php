<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetEventAction;

trait GetEventActionTrait
{
    /**
     * @param GetEventActionRequest $args
     * @return GetEventActionResponse
     */
    public function getEventAction(GetEventActionRequest $args)
    {
        $result = parent::getEventAction($args->toArray());
        return new GetEventActionResponse($result->toArray());
    }
}
