<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlacementId
 * @property string $GameSessionQueueName
 * @property list<Shapes\GameProperty> $GameProperties
 * @property int $MaximumPlayerSessionCount
 * @property string $GameSessionName
 * @property list<Shapes\PlayerLatency> $PlayerLatencies
 * @property list<Shapes\DesiredPlayerSession> $DesiredPlayerSessions
 * @property string $GameSessionData
 */
class StartGameSessionPlacementRequest extends Request
{
    /**
     * @param array{
     *     PlacementId: string,
     *     GameSessionQueueName: string,
     *     GameProperties?: list<Shapes\GameProperty>,
     *     MaximumPlayerSessionCount: int,
     *     GameSessionName?: string,
     *     PlayerLatencies?: list<Shapes\PlayerLatency>,
     *     DesiredPlayerSessions?: list<Shapes\DesiredPlayerSession>,
     *     GameSessionData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
