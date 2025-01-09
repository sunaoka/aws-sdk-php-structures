<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\RollbackApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Count
 */
class InputParallelism extends Shape
{
    /**
     * @param array{Count?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
