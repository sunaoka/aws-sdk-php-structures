<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $InstanceId
 * @property string|null $AssociationVersion
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property \Aws\Api\DateTimeResult|null $LastUpdateAssociationDate
 * @property AssociationStatus|null $Status
 * @property AssociationOverview|null $Overview
 * @property string|null $DocumentVersion
 * @property string|null $AutomationTargetParameterName
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $AssociationId
 * @property list<Target>|null $Targets
 * @property string|null $ScheduleExpression
 * @property InstanceAssociationOutputLocation|null $OutputLocation
 * @property \Aws\Api\DateTimeResult|null $LastExecutionDate
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulExecutionDate
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
 * @property list<AlarmStateInformation>|null $TriggeredAlarms
 * @property string|null $AssociationDispatchAssumeRole
 */
class AssociationDescription extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     InstanceId?: string|null,
     *     AssociationVersion?: string|null,
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateAssociationDate?: \Aws\Api\DateTimeResult|null,
     *     Status?: AssociationStatus|null,
     *     Overview?: AssociationOverview|null,
     *     DocumentVersion?: string|null,
     *     AutomationTargetParameterName?: string|null,
     *     Parameters?: array<string, list<string>>|null,
     *     AssociationId?: string|null,
     *     Targets?: list<Target>|null,
     *     ScheduleExpression?: string|null,
     *     OutputLocation?: InstanceAssociationOutputLocation|null,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult|null,
     *     LastSuccessfulExecutionDate?: \Aws\Api\DateTimeResult|null,
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
     *     AlarmConfiguration?: AlarmConfiguration|null,
     *     TriggeredAlarms?: list<AlarmStateInformation>|null,
     *     AssociationDispatchAssumeRole?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
