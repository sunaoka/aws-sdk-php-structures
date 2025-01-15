<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackSetId
 * @property string|null $Region
 * @property string|null $Account
 * @property string|null $StackId
 * @property 'CURRENT'|'OUTDATED'|'INOPERABLE'|null $Status
 * @property string|null $StatusReason
 * @property StackInstanceComprehensiveStatus|null $StackInstanceStatus
 * @property string|null $OrganizationalUnitId
 * @property 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED'|null $DriftStatus
 * @property \Aws\Api\DateTimeResult|null $LastDriftCheckTimestamp
 * @property string|null $LastOperationId
 */
class StackInstanceSummary extends Shape
{
    /**
     * @param array{
     *     StackSetId?: string|null,
     *     Region?: string|null,
     *     Account?: string|null,
     *     StackId?: string|null,
     *     Status?: 'CURRENT'|'OUTDATED'|'INOPERABLE'|null,
     *     StatusReason?: string|null,
     *     StackInstanceStatus?: StackInstanceComprehensiveStatus|null,
     *     OrganizationalUnitId?: string|null,
     *     DriftStatus?: 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED'|null,
     *     LastDriftCheckTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LastOperationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
