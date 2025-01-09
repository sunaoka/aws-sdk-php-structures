<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CountUpdate
 */
class InputParallelismUpdate extends Shape
{
    /**
     * @param array{CountUpdate: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
