<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateEventAction;

trait UpdateEventActionTrait
{
    /**
     * @param UpdateEventActionRequest $args
     * @return UpdateEventActionResponse
     */
    public function updateEventAction(UpdateEventActionRequest $args)
    {
        $result = parent::updateEventAction($args->toArray());
        return new UpdateEventActionResponse($result->toArray());
    }
}
