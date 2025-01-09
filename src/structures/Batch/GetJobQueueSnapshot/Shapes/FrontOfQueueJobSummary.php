<?php

namespace Sunaoka\Aws\Structures\Batch\GetJobQueueSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property int $earliestTimeAtPosition
 */
class FrontOfQueueJobSummary extends Shape
{
    /**
     * @param array{
     *     jobArn?: string,
     *     earliestTimeAtPosition?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
