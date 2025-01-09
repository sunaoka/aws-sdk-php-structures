<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSessionQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<0, max> $TimeoutInSeconds
 * @property list<Shapes\PlayerLatencyPolicy> $PlayerLatencyPolicies
 * @property list<Shapes\GameSessionQueueDestination> $Destinations
 * @property Shapes\FilterConfiguration $FilterConfiguration
 * @property Shapes\PriorityConfiguration $PriorityConfiguration
 * @property string $CustomEventData
 * @property string $NotificationTarget
 * @property list<Shapes\Tag> $Tags
 */
class CreateGameSessionQueueRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     TimeoutInSeconds?: int<0, max>,
     *     PlayerLatencyPolicies?: list<Shapes\PlayerLatencyPolicy>,
     *     Destinations?: list<Shapes\GameSessionQueueDestination>,
     *     FilterConfiguration?: Shapes\FilterConfiguration,
     *     PriorityConfiguration?: Shapes\PriorityConfiguration,
     *     CustomEventData?: string,
     *     NotificationTarget?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
