<?php

namespace Sunaoka\Aws\Structures\Rds\RebootDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinCapacity
 * @property int $MaxCapacity
 * @property bool $AutoPause
 * @property int $SecondsUntilAutoPause
 * @property string $TimeoutAction
 * @property int $SecondsBeforeTimeout
 */
class ScalingConfigurationInfo extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: int,
     *     MaxCapacity?: int,
     *     AutoPause?: bool,
     *     SecondsUntilAutoPause?: int,
     *     TimeoutAction?: string,
     *     SecondsBeforeTimeout?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
