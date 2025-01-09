<?php

namespace Sunaoka\Aws\Structures\S3Control\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ElapsedTimeInActiveSeconds
 */
class JobTimers extends Shape
{
    /**
     * @param array{ElapsedTimeInActiveSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
