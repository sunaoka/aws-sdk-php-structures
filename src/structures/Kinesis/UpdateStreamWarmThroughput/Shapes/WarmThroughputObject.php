<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamWarmThroughput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $TargetMiBps
 * @property int<0, max>|null $CurrentMiBps
 */
class WarmThroughputObject extends Shape
{
    /**
     * @param array{
     *     TargetMiBps?: int<0, max>|null,
     *     CurrentMiBps?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
