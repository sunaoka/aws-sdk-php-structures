<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\StartStreamSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $SharedWithClient
 */
class PerformanceStatsConfiguration extends Shape
{
    /**
     * @param array{SharedWithClient?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
