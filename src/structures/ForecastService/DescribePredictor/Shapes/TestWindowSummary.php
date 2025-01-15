<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $TestWindowStart
 * @property \Aws\Api\DateTimeResult|null $TestWindowEnd
 * @property string|null $Status
 * @property string|null $Message
 */
class TestWindowSummary extends Shape
{
    /**
     * @param array{
     *     TestWindowStart?: \Aws\Api\DateTimeResult|null,
     *     TestWindowEnd?: \Aws\Api\DateTimeResult|null,
     *     Status?: string|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
