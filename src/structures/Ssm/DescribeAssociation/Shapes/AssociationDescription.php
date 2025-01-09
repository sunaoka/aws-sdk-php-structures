<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $InstanceId
 * @property string $AssociationVersion
 * @property \Aws\Api\DateTimeResult $Date
 * @property \Aws\Api\DateTimeResult $LastUpdateAssociationDate
 * @property AssociationStatus $Status
 * @property AssociationOverview $Overview
 * @property string $DocumentVersion
 * @property string $AutomationTargetParameterName
 * @property array<string, list<string>> $Parameters
 * @property string $AssociationId
 * @property list<Target> $Targets
 * @property string $ScheduleExpression
 * @property InstanceAssociationOutputLocation $OutputLocation
 * @property \Aws\Api\DateTimeResult $LastExecutionDate
 * @property \Aws\Api\DateTimeResult $LastSuccessfulExecutionDate
 * @property string $AssociationName
 * @property string $MaxErrors
 * @property string $MaxConcurrency
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED' $ComplianceSeverity
 * @property 'AUTO'|'MANUAL' $SyncCompliance
 * @property bool $ApplyOnlyAtCronInterval
 * @property list<string> $CalendarNames
 * @property list<TargetLocation> $TargetLocations
 * @property int<1, 6> $ScheduleOffset
 * @property int<1, 24> $Duration
 * @property list<array<string, list<string>>> $TargetMaps
 * @property AlarmConfiguration $AlarmConfiguration
 * @property list<AlarmStateInformation> $TriggeredAlarms
 */
class AssociationDescription extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     InstanceId?: string,
     *     AssociationVersion?: string,
     *     Date?: \Aws\Api\DateTimeResult,
     *     LastUpdateAssociationDate?: \Aws\Api\DateTimeResult,
     *     Status?: AssociationStatus,
     *     Overview?: AssociationOverview,
     *     DocumentVersion?: string,
     *     AutomationTargetParameterName?: string,
     *     Parameters?: array<string, list<string>>,
     *     AssociationId?: string,
     *     Targets?: list<Target>,
     *     ScheduleExpression?: string,
     *     OutputLocation?: InstanceAssociationOutputLocation,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult,
     *     LastSuccessfulExecutionDate?: \Aws\Api\DateTimeResult,
     *     AssociationName?: string,
     *     MaxErrors?: string,
     *     MaxConcurrency?: string,
     *     ComplianceSeverity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED',
     *     SyncCompliance?: 'AUTO'|'MANUAL',
     *     ApplyOnlyAtCronInterval?: bool,
     *     CalendarNames?: list<string>,
     *     TargetLocations?: list<TargetLocation>,
     *     ScheduleOffset?: int<1, 6>,
     *     Duration?: int<1, 24>,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     AlarmConfiguration?: AlarmConfiguration,
     *     TriggeredAlarms?: list<AlarmStateInformation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
