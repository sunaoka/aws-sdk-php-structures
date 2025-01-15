<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSessionQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $GameSessionQueueArn
 * @property int<0, max>|null $TimeoutInSeconds
 * @property list<PlayerLatencyPolicy>|null $PlayerLatencyPolicies
 * @property list<GameSessionQueueDestination>|null $Destinations
 * @property FilterConfiguration|null $FilterConfiguration
 * @property PriorityConfiguration|null $PriorityConfiguration
 * @property string|null $CustomEventData
 * @property string|null $NotificationTarget
 */
class GameSessionQueue extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     GameSessionQueueArn?: string|null,
     *     TimeoutInSeconds?: int<0, max>|null,
     *     PlayerLatencyPolicies?: list<PlayerLatencyPolicy>|null,
     *     Destinations?: list<GameSessionQueueDestination>|null,
     *     FilterConfiguration?: FilterConfiguration|null,
     *     PriorityConfiguration?: PriorityConfiguration|null,
     *     CustomEventData?: string|null,
     *     NotificationTarget?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
