<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $processingTargets
 * @property int|null $numberOfCanceledThings
 * @property int|null $numberOfSucceededThings
 * @property int|null $numberOfFailedThings
 * @property int|null $numberOfRejectedThings
 * @property int|null $numberOfQueuedThings
 * @property int|null $numberOfInProgressThings
 * @property int|null $numberOfRemovedThings
 * @property int|null $numberOfTimedOutThings
 */
class JobProcessDetails extends Shape
{
    /**
     * @param array{
     *     processingTargets?: list<string>|null,
     *     numberOfCanceledThings?: int|null,
     *     numberOfSucceededThings?: int|null,
     *     numberOfFailedThings?: int|null,
     *     numberOfRejectedThings?: int|null,
     *     numberOfQueuedThings?: int|null,
     *     numberOfInProgressThings?: int|null,
     *     numberOfRemovedThings?: int|null,
     *     numberOfTimedOutThings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
