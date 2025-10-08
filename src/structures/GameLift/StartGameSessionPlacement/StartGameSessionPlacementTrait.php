<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement;

trait StartGameSessionPlacementTrait
{
    /**
     * @param StartGameSessionPlacementRequest $args
     * @return StartGameSessionPlacementResponse
     */
    public function startGameSessionPlacement(StartGameSessionPlacementRequest $args)
    {
        $result = parent::startGameSessionPlacement($args->toArray());
        return new StartGameSessionPlacementResponse($result->toArray());
    }
}
