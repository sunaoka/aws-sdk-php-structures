<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property int<1, 10080>|null $idleTimeoutMinutes
 */
class AutoStopConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     idleTimeoutMinutes?: int<1, 10080>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
