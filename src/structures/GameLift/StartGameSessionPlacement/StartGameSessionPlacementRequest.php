<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlacementId
 * @property string $GameSessionQueueName
 * @property list<Shapes\GameProperty> $GameProperties
 * @property int<0, max> $MaximumPlayerSessionCount
 * @property string $GameSessionName
 * @property list<Shapes\PlayerLatency> $PlayerLatencies
 * @property list<Shapes\DesiredPlayerSession> $DesiredPlayerSessions
 * @property string $GameSessionData
 * @property Shapes\PriorityConfigurationOverride $PriorityConfigurationOverride
 */
class StartGameSessionPlacementRequest extends Request
{
    /**
     * @param array{
     *     PlacementId: string,
     *     GameSessionQueueName: string,
     *     GameProperties?: list<Shapes\GameProperty>,
     *     MaximumPlayerSessionCount: int<0, max>,
     *     GameSessionName?: string,
     *     PlayerLatencies?: list<Shapes\PlayerLatency>,
     *     DesiredPlayerSessions?: list<Shapes\DesiredPlayerSession>,
     *     GameSessionData?: string,
     *     PriorityConfigurationOverride?: Shapes\PriorityConfigurationOverride
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
