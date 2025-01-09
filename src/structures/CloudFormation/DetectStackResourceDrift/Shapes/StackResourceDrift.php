<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackResourceDrift\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $LogicalResourceId
 * @property string $PhysicalResourceId
 * @property list<PhysicalResourceIdContextKeyValuePair> $PhysicalResourceIdContext
 * @property string $ResourceType
 * @property string $ExpectedProperties
 * @property string $ActualProperties
 * @property list<PropertyDifference> $PropertyDifferences
 * @property 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED' $StackResourceDriftStatus
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property ModuleInfo $ModuleInfo
 */
class StackResourceDrift extends Shape
{
    /**
     * @param array{
     *     StackId: string,
     *     LogicalResourceId: string,
     *     PhysicalResourceId?: string,
     *     PhysicalResourceIdContext?: list<PhysicalResourceIdContextKeyValuePair>,
     *     ResourceType: string,
     *     ExpectedProperties?: string,
     *     ActualProperties?: string,
     *     PropertyDifferences?: list<PropertyDifference>,
     *     StackResourceDriftStatus: 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED',
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     ModuleInfo?: ModuleInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
