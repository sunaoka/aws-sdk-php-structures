<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DpuExecutionInMillis
 */
class SessionStatistics extends Shape
{
    /**
     * @param array{DpuExecutionInMillis?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
