<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $GameSessionQueueArn
 * @property int<0, max> $TimeoutInSeconds
 * @property list<PlayerLatencyPolicy> $PlayerLatencyPolicies
 * @property list<GameSessionQueueDestination> $Destinations
 * @property FilterConfiguration $FilterConfiguration
 * @property PriorityConfiguration $PriorityConfiguration
 * @property string $CustomEventData
 * @property string $NotificationTarget
 */
class GameSessionQueue extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     GameSessionQueueArn?: string,
     *     TimeoutInSeconds?: int<0, max>,
     *     PlayerLatencyPolicies?: list<PlayerLatencyPolicy>,
     *     Destinations?: list<GameSessionQueueDestination>,
     *     FilterConfiguration?: FilterConfiguration,
     *     PriorityConfiguration?: PriorityConfiguration,
     *     CustomEventData?: string,
     *     NotificationTarget?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
