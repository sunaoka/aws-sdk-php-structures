<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlacementId
 * @property string $GameSessionQueueName
 * @property list<Shapes\GameProperty>|null $GameProperties
 * @property int<0, max> $MaximumPlayerSessionCount
 * @property string|null $GameSessionName
 * @property list<Shapes\PlayerLatency>|null $PlayerLatencies
 * @property list<Shapes\DesiredPlayerSession>|null $DesiredPlayerSessions
 * @property string|null $GameSessionData
 * @property Shapes\PriorityConfigurationOverride|null $PriorityConfigurationOverride
 */
class StartGameSessionPlacementRequest extends Request
{
    /**
     * @param array{
     *     PlacementId: string,
     *     GameSessionQueueName: string,
     *     GameProperties?: list<Shapes\GameProperty>|null,
     *     MaximumPlayerSessionCount: int<0, max>,
     *     GameSessionName?: string|null,
     *     PlayerLatencies?: list<Shapes\PlayerLatency>|null,
     *     DesiredPlayerSessions?: list<Shapes\DesiredPlayerSession>|null,
     *     GameSessionData?: string|null,
     *     PriorityConfigurationOverride?: Shapes\PriorityConfigurationOverride|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
