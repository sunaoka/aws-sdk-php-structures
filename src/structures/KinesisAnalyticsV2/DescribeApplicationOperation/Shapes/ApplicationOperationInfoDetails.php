<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Operation
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED' $OperationStatus
 * @property ApplicationVersionChangeDetails $ApplicationVersionChangeDetails
 * @property OperationFailureDetails $OperationFailureDetails
 */
class ApplicationOperationInfoDetails extends Shape
{
    /**
     * @param array{
     *     Operation: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     OperationStatus: 'IN_PROGRESS'|'CANCELLED'|'SUCCESSFUL'|'FAILED',
     *     ApplicationVersionChangeDetails?: ApplicationVersionChangeDetails,
     *     OperationFailureDetails?: OperationFailureDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
