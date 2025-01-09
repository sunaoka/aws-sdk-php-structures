<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $TestWindowStart
 * @property \Aws\Api\DateTimeResult $TestWindowEnd
 * @property string $Status
 * @property string $Message
 */
class TestWindowSummary extends Shape
{
    /**
     * @param array{
     *     TestWindowStart?: \Aws\Api\DateTimeResult,
     *     TestWindowEnd?: \Aws\Api\DateTimeResult,
     *     Status?: string,
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
