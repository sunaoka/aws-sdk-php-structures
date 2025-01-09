<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameServerGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $TargetValue
 */
class TargetTrackingConfiguration extends Shape
{
    /**
     * @param array{TargetValue: double} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
