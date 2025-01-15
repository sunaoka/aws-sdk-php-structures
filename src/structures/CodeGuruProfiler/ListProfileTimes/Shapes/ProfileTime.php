<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfileTimes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $start
 */
class ProfileTime extends Shape
{
    /**
     * @param array{start?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
