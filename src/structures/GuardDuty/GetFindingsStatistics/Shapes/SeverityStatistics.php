<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastGeneratedAt
 * @property double|null $Severity
 * @property int|null $TotalFindings
 */
class SeverityStatistics extends Shape
{
    /**
     * @param array{
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
