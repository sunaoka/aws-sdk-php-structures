<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListEventActions;

trait ListEventActionsTrait
{
    /**
     * @param ListEventActionsRequest $args
     * @return ListEventActionsResponse
     */
    public function listEventActions(ListEventActionsRequest $args)
    {
        $result = parent::listEventActions($args->toArray());
        return new ListEventActionsResponse($result->toArray());
    }
}
