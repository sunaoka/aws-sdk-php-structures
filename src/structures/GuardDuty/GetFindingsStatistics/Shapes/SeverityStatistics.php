<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastGeneratedAt
 * @property double $Severity
 * @property int $TotalFindings
 */
class SeverityStatistics extends Shape
{
    /**
     * @param array{
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
