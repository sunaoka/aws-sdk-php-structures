<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationStatusCheckId
 * @property \Aws\Api\DateTimeResult|null $CheckUpdateTime
 * @property 'included'|'excluded'|null $Aggregation
 * @property 'passed'|'failed'|'initializing'|'insufficient-data'|'not-applicable'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StatusTimeStamp
 * @property \Aws\Api\DateTimeResult|null $StatusSince
 * @property ApplicationStatusReason|null $Reason
 */
class ApplicationStatusDetail extends Shape
{
    /**
     * @param array{
     *     ApplicationStatusCheckId?: string|null,
     *     CheckUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     Aggregation?: 'included'|'excluded'|null,
     *     Status?: 'passed'|'failed'|'initializing'|'insufficient-data'|'not-applicable'|null,
     *     StatusTimeStamp?: \Aws\Api\DateTimeResult|null,
     *     StatusSince?: \Aws\Api\DateTimeResult|null,
     *     Reason?: ApplicationStatusReason|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
