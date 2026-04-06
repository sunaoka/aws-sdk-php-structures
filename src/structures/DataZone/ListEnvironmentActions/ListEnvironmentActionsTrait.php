<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentActions;

trait ListEnvironmentActionsTrait
{
    /**
     * @param ListEnvironmentActionsRequest $args
     * @return ListEnvironmentActionsResponse
     */
    public function listEnvironmentActions(ListEnvironmentActionsRequest $args)
    {
        $result = parent::listEnvironmentActions($args->toArray());
        return new ListEnvironmentActionsResponse($result->toArray());
    }
}
