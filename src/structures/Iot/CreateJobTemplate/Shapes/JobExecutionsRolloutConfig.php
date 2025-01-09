<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maximumPerMinute
 * @property ExponentialRolloutRate $exponentialRate
 */
class JobExecutionsRolloutConfig extends Shape
{
    /**
     * @param array{
     *     maximumPerMinute?: int,
     *     exponentialRate?: ExponentialRolloutRate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
