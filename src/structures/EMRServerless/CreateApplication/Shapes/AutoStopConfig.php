<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property int $idleTimeoutMinutes
 */
class AutoStopConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     idleTimeoutMinutes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
