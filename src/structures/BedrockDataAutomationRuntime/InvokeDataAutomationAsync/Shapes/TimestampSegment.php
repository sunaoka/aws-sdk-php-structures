<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomationAsync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $startTimeMillis
 * @property int<300000, max> $endTimeMillis
 */
class TimestampSegment extends Shape
{
    /**
     * @param array{
     *     startTimeMillis: int<0, max>,
     *     endTimeMillis: int<300000, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
