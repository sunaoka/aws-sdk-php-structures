<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MinCapacity
 * @property int|null $MaxCapacity
 * @property bool|null $AutoPause
 * @property int|null $SecondsUntilAutoPause
 * @property string|null $TimeoutAction
 * @property int|null $SecondsBeforeTimeout
 */
class ScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: int|null,
     *     MaxCapacity?: int|null,
     *     AutoPause?: bool|null,
     *     SecondsUntilAutoPause?: int|null,
     *     TimeoutAction?: string|null,
     *     SecondsBeforeTimeout?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
