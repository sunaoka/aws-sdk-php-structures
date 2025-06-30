<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstanceResourceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $LogicalResourceId
 * @property string|null $PhysicalResourceId
 * @property list<PhysicalResourceIdContextKeyValuePair>|null $PhysicalResourceIdContext
 * @property string $ResourceType
 * @property list<PropertyDifference>|null $PropertyDifferences
 * @property 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'|'UNKNOWN' $StackResourceDriftStatus
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class StackInstanceResourceDriftsSummary extends Shape
{
    /**
     * @param array{
     *     StackId: string,
     *     LogicalResourceId: string,
     *     PhysicalResourceId?: string|null,
     *     PhysicalResourceIdContext?: list<PhysicalResourceIdContextKeyValuePair>|null,
     *     ResourceType: string,
     *     PropertyDifferences?: list<PropertyDifference>|null,
     *     StackResourceDriftStatus: 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED'|'UNKNOWN',
     *     Timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
