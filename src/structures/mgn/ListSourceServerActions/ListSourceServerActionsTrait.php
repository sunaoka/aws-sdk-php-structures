<?php

namespace Sunaoka\Aws\Structures\mgn\ListSourceServerActions;

trait ListSourceServerActionsTrait
{
    /**
     * @param ListSourceServerActionsRequest $args
     * @return ListSourceServerActionsResponse
     */
    public function listSourceServerActions(ListSourceServerActionsRequest $args)
    {
        $result = parent::listSourceServerActions($args->toArray());
        return new ListSourceServerActionsResponse($result->toArray());
    }
}
