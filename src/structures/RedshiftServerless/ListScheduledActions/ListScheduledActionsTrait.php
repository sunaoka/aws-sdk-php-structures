<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListScheduledActions;

trait ListScheduledActionsTrait
{
    /**
     * @param ListScheduledActionsRequest $args
     * @return ListScheduledActionsResponse
     */
    public function listScheduledActions(ListScheduledActionsRequest $args)
    {
        $result = parent::listScheduledActions($args->toArray());
        return new ListScheduledActionsResponse($result->toArray());
    }
}
