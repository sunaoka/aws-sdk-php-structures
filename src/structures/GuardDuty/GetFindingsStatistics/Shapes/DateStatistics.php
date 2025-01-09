<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Date
 * @property \Aws\Api\DateTimeResult $LastGeneratedAt
 * @property double $Severity
 * @property int $TotalFindings
 */
class DateStatistics extends Shape
{
    /**
     * @param array{
     *     Date?: \Aws\Api\DateTimeResult,
     *     LastGeneratedAt?: \Aws\Api\DateTimeResult,
     *     Severity?: double,
     *     TotalFindings?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
