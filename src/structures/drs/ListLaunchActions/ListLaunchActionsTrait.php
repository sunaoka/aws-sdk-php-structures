<?php

namespace Sunaoka\Aws\Structures\drs\ListLaunchActions;

trait ListLaunchActionsTrait
{
    /**
     * @param ListLaunchActionsRequest $args
     * @return ListLaunchActionsResponse
     */
    public function listLaunchActions(ListLaunchActionsRequest $args)
    {
        $result = parent::listLaunchActions($args->toArray());
        return new ListLaunchActionsResponse($result->toArray());
    }
}
