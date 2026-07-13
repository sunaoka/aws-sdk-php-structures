<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class ScanConfigurationContinuousScanDetails extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
