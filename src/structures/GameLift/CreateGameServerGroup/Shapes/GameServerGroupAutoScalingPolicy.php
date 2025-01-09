<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameServerGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $EstimatedInstanceWarmup
 * @property TargetTrackingConfiguration $TargetTrackingConfiguration
 */
class GameServerGroupAutoScalingPolicy extends Shape
{
    /**
     * @param array{
     *     EstimatedInstanceWarmup?: int<1, max>,
     *     TargetTrackingConfiguration: TargetTrackingConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
