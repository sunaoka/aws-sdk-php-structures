<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobArn
 * @property int|null $earliestTimeAtPosition
 */
class FrontOfQueueJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn?: string|null,
     *     earliestTimeAtPosition?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
