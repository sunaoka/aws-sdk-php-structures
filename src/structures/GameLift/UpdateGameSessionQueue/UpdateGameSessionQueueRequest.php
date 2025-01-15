<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameSessionQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<0, max>|null $TimeoutInSeconds
 * @property list<Shapes\PlayerLatencyPolicy>|null $PlayerLatencyPolicies
 * @property list<Shapes\GameSessionQueueDestination>|null $Destinations
 * @property Shapes\FilterConfiguration|null $FilterConfiguration
 * @property Shapes\PriorityConfiguration|null $PriorityConfiguration
 * @property string|null $CustomEventData
 * @property string|null $NotificationTarget
 */
class UpdateGameSessionQueueRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TimeoutInSeconds?: int<0, max>|null,
     *     PlayerLatencyPolicies?: list<Shapes\PlayerLatencyPolicy>|null,
     *     Destinations?: list<Shapes\GameSessionQueueDestination>|null,
     *     FilterConfiguration?: Shapes\FilterConfiguration|null,
     *     PriorityConfiguration?: Shapes\PriorityConfiguration|null,
     *     CustomEventData?: string|null,
     *     NotificationTarget?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
