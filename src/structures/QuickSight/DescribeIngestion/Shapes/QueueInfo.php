<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIngestion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WaitingOnIngestion
 * @property string $QueuedIngestion
 */
class QueueInfo extends Shape
{
    /**
     * @param array{
     *     WaitingOnIngestion: string,
     *     QueuedIngestion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
