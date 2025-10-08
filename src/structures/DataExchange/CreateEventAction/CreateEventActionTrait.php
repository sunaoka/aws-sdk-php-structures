<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateEventAction;

trait CreateEventActionTrait
{
    /**
     * @param CreateEventActionRequest $args
     * @return CreateEventActionResponse
     */
    public function createEventAction(CreateEventActionRequest $args)
    {
        $result = parent::createEventAction($args->toArray());
        return new CreateEventActionResponse($result->toArray());
    }
}
