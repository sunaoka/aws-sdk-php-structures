<?php

namespace Sunaoka\Aws\Structures\GameSparks\DisconnectPlayer;

trait DisconnectPlayerTrait
{
    /**
     * @param DisconnectPlayerRequest $args
     * @return DisconnectPlayerResponse
     */
    public function disconnectPlayer(DisconnectPlayerRequest $args)
    {
        $result = parent::disconnectPlayer($args->toArray());
        return new DisconnectPlayerResponse($result->toArray());
    }
}
