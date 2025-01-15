<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $InstanceId
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $AutomationTargetParameterName
 * @property string|null $DocumentVersion
 * @property list<Target>|null $Targets
 * @property string|null $ScheduleExpression
 * @property InstanceAssociationOutputLocation|null $OutputLocation
 * @property string|null $AssociationName
 * @property string|null $MaxErrors
 * @property string|null $MaxConcurrency
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED'|null $ComplianceSeverity
 * @property 'AUTO'|'MANUAL'|null $SyncCompliance
 * @property bool|null $ApplyOnlyAtCronInterval
 * @property list<string>|null $CalendarNames
 * @property list<TargetLocation>|null $TargetLocations
 * @property int<1, 6>|null $ScheduleOffset
 * @property int<1, 24>|null $Duration
 * @property list<array<string, list<string>>>|null $TargetMaps
 * @property AlarmConfiguration|null $AlarmConfiguration
 */
class CreateAssociationBatchRequestEntry extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     InstanceId?: string|null,
     *     Parameters?: array<string, list<string>>|null,
     *     AutomationTargetParameterName?: string|null,
     *     DocumentVersion?: string|null,
     *     Targets?: list<Target>|null,
     *     ScheduleExpression?: string|null,
     *     OutputLocation?: InstanceAssociationOutputLocation|null,
     *     AssociationName?: string|null,
     *     MaxErrors?: string|null,
     *     MaxConcurrency?: string|null,
     *     ComplianceSeverity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED'|null,
     *     SyncCompliance?: 'AUTO'|'MANUAL'|null,
     *     ApplyOnlyAtCronInterval?: bool|null,
     *     CalendarNames?: list<string>|null,
     *     TargetLocations?: list<TargetLocation>|null,
     *     ScheduleOffset?: int<1, 6>|null,
     *     Duration?: int<1, 24>|null,
     *     TargetMaps?: list<array<string, list<string>>>|null,
     *     AlarmConfiguration?: AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
