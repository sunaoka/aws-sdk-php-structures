<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $sampled
 */
class LiveTailSessionMetadata extends Shape
{
    /**
     * @param array{sampled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
