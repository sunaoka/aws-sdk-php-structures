<?php

namespace Sunaoka\Aws\Structures\GameLift\StopGameSessionPlacement;

trait StopGameSessionPlacementTrait
{
    /**
     * @param StopGameSessionPlacementRequest $args
     * @return StopGameSessionPlacementResponse
     */
    public function stopGameSessionPlacement(StopGameSessionPlacementRequest $args)
    {
        $result = parent::stopGameSessionPlacement($args->toArray());
        return new StopGameSessionPlacementResponse($result->toArray());
    }
}
