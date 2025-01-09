<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property int<1, 10080> $idleTimeoutMinutes
 */
class AutoStopConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     idleTimeoutMinutes?: int<1, 10080>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
