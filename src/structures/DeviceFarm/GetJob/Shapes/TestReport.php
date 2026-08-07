<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property TestReportMetrics|null $metrics
 * @property string|null $testDetailsUrl
 */
class TestReport extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     metrics?: TestReportMetrics|null,
     *     testDetailsUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
