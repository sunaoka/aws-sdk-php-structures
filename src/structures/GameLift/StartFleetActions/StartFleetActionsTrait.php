<?php

namespace Sunaoka\Aws\Structures\GameLift\StartFleetActions;

trait StartFleetActionsTrait
{
    /**
     * @param StartFleetActionsRequest $args
     * @return StartFleetActionsResponse
     */
    public function startFleetActions(StartFleetActionsRequest $args)
    {
        $result = parent::startFleetActions($args->toArray());
        return new StartFleetActionsResponse($result->toArray());
    }
}
