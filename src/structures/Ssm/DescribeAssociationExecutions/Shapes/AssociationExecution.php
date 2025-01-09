<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $AssociationVersion
 * @property string $ExecutionId
 * @property string $Status
 * @property string $DetailedStatus
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastExecutionDate
 * @property string $ResourceCountByStatus
 * @property AlarmConfiguration $AlarmConfiguration
 * @property list<AlarmStateInformation> $TriggeredAlarms
 */
class AssociationExecution extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     AssociationVersion?: string,
     *     ExecutionId?: string,
     *     Status?: string,
     *     DetailedStatus?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult,
     *     ResourceCountByStatus?: string,
     *     AlarmConfiguration?: AlarmConfiguration,
     *     TriggeredAlarms?: list<AlarmStateInformation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
