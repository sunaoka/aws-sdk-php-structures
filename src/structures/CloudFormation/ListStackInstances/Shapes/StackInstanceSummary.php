<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackSetId
 * @property string $Region
 * @property string $Account
 * @property string $StackId
 * @property 'CURRENT'|'OUTDATED'|'INOPERABLE' $Status
 * @property string $StatusReason
 * @property StackInstanceComprehensiveStatus $StackInstanceStatus
 * @property string $OrganizationalUnitId
 * @property 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED' $DriftStatus
 * @property \Aws\Api\DateTimeResult $LastDriftCheckTimestamp
 * @property string $LastOperationId
 */
class StackInstanceSummary extends Shape
{
    /**
     * @param array{
     *     StackSetId?: string,
     *     Region?: string,
     *     Account?: string,
     *     StackId?: string,
     *     Status?: 'CURRENT'|'OUTDATED'|'INOPERABLE',
     *     StatusReason?: string,
     *     StackInstanceStatus?: StackInstanceComprehensiveStatus,
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
