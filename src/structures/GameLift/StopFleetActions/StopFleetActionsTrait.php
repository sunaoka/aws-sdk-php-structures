<?php

namespace Sunaoka\Aws\Structures\GameLift\StopFleetActions;

trait StopFleetActionsTrait
{
    /**
     * @param StopFleetActionsRequest $args
     * @return StopFleetActionsResponse
     */
    public function stopFleetActions(StopFleetActionsRequest $args)
    {
        $result = parent::stopFleetActions($args->toArray());
        return new StopFleetActionsResponse($result->toArray());
    }
}
