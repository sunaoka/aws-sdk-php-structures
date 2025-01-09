<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackSetId
 * @property string $Region
 * @property string $Account
 * @property string $StackId
 * @property list<Parameter> $ParameterOverrides
 * @property 'CURRENT'|'OUTDATED'|'INOPERABLE' $Status
 * @property StackInstanceComprehensiveStatus $StackInstanceStatus
 * @property string $StatusReason
 * @property string $OrganizationalUnitId
 * @property 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED' $DriftStatus
 * @property \Aws\Api\DateTimeResult $LastDriftCheckTimestamp
 * @property string $LastOperationId
 */
class StackInstance extends Shape
{
    /**
     * @param array{
     *     StackSetId?: string,
     *     Region?: string,
     *     Account?: string,
     *     StackId?: string,
     *     ParameterOverrides?: list<Parameter>,
     *     Status?: 'CURRENT'|'OUTDATED'|'INOPERABLE',
     *     StackInstanceStatus?: StackInstanceComprehensiveStatus,
     *     StatusReason?: string,
     *     OrganizationalUnitId?: string,
     *     DriftStatus?: 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED',
     *     LastDriftCheckTimestamp?: \Aws\Api\DateTimeResult,
     *     LastOperationId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
