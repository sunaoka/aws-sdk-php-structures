<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 200>|null $MinimumPollers
 * @property int<1, 2000>|null $MaximumPollers
 * @property string|null $PollerGroupName
 */
class ProvisionedPollerConfig extends Shape
{
    /**
     * @param array{
     *     MinimumPollers?: int<1, 200>|null,
     *     MaximumPollers?: int<1, 2000>|null,
     *     PollerGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
