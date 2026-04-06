<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $BlockDurationMinutes
 * @property 'hibernate'|'stop'|null $InstanceInterruptionBehavior
 * @property string|null $MaxPrice
 * @property 'one-time'|'persistent'|null $SpotInstanceType
 * @property \Aws\Api\DateTimeResult|null $ValidUntilUtc
 */
class SpotMarketOptions extends Shape
{
    /**
     * @param array{
     *     BlockDurationMinutes?: int<0, max>|null,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|null,
     *     MaxPrice?: string|null,
     *     SpotInstanceType?: 'one-time'|'persistent'|null,
     *     ValidUntilUtc?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
