<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property \Aws\Api\DateTimeResult|null $LastGeneratedAt
 * @property double|null $Severity
 * @property int|null $TotalFindings
 */
class DateStatistics extends Shape
{
    /**
     * @param array{
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     LastGeneratedAt?: \Aws\Api\DateTimeResult|null,
     *     Severity?: double|null,
     *     TotalFindings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
