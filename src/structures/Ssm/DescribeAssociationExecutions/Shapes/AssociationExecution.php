<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $AssociationVersion
 * @property string|null $ExecutionId
 * @property string|null $Status
 * @property string|null $DetailedStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastExecutionDate
 * @property string|null $ResourceCountByStatus
 * @property AlarmConfiguration|null $AlarmConfiguration
 * @property list<AlarmStateInformation>|null $TriggeredAlarms
 */
class AssociationExecution extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     AssociationVersion?: string|null,
     *     ExecutionId?: string|null,
     *     Status?: string|null,
     *     DetailedStatus?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult|null,
     *     ResourceCountByStatus?: string|null,
     *     AlarmConfiguration?: AlarmConfiguration|null,
     *     TriggeredAlarms?: list<AlarmStateInformation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
