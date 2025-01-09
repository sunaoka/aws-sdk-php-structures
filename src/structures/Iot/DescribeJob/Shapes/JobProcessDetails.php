<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $processingTargets
 * @property int $numberOfCanceledThings
 * @property int $numberOfSucceededThings
 * @property int $numberOfFailedThings
 * @property int $numberOfRejectedThings
 * @property int $numberOfQueuedThings
 * @property int $numberOfInProgressThings
 * @property int $numberOfRemovedThings
 * @property int $numberOfTimedOutThings
 */
class JobProcessDetails extends Shape
{
    /**
     * @param array{
     *     processingTargets?: list<string>,
     *     numberOfCanceledThings?: int,
     *     numberOfSucceededThings?: int,
     *     numberOfFailedThings?: int,
     *     numberOfRejectedThings?: int,
     *     numberOfQueuedThings?: int,
     *     numberOfInProgressThings?: int,
     *     numberOfRemovedThings?: int,
     *     numberOfTimedOutThings?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
