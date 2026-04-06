<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DetectStackResourceDrift\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $LogicalResourceId
 * @property string|null $PhysicalResourceId
 * @property list<PhysicalResourceIdContextKeyValuePair>|null $PhysicalResourceIdContext
 * @property string $ResourceType
 * @property string|null $ExpectedProperties
 * @property string|null $ActualProperties
 * @property list<PropertyDifference>|null $PropertyDifferences
 * @property 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED' $StackResourceDriftStatus
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property ModuleInfo|null $ModuleInfo
 */
class StackResourceDrift extends Shape
{
    /**
     * @param array{
     *     StackId: string,
     *     LogicalResourceId: string,
     *     PhysicalResourceId?: string|null,
     *     PhysicalResourceIdContext?: list<PhysicalResourceIdContextKeyValuePair>|null,
     *     ResourceType: string,
     *     ExpectedProperties?: string|null,
     *     ActualProperties?: string|null,
     *     PropertyDifferences?: list<PropertyDifference>|null,
     *     StackResourceDriftStatus: 'IN_SYNC'|'MODIFIED'|'DELETED'|'NOT_CHECKED',
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     ModuleInfo?: ModuleInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
