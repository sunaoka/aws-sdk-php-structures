<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionActions;

trait ListSessionActionsTrait
{
    /**
     * @param ListSessionActionsRequest $args
     * @return ListSessionActionsResponse
     */
    public function listSessionActions(ListSessionActionsRequest $args)
    {
        $result = parent::listSessionActions($args->toArray());
        return new ListSessionActionsResponse($result->toArray());
    }
}
