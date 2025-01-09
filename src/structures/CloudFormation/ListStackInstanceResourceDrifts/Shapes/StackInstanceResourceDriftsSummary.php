<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackInstanceResourceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $LogicalResourceId
 * @property string $PhysicalResourceId
 * @property list<PhysicalResourceIdContextKeyValuePair> $PhysicalResourceIdContext
 * @property string $ResourceType
 * @property list<PropertyDifference> $PropertyDifferences
 * @property 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED' $StackResourceDriftStatus
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class StackInstanceResourceDriftsSummary extends Shape
{
    /**
     * @param array{
     *     StackId: string,
     *     LogicalResourceId: string,
     *     PhysicalResourceId?: string,
     *     PhysicalResourceIdContext?: list<PhysicalResourceIdContextKeyValuePair>,
     *     ResourceType: string,
     *     PropertyDifferences?: list<PropertyDifference>,
     *     StackResourceDriftStatus: 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED',
     *     Timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
