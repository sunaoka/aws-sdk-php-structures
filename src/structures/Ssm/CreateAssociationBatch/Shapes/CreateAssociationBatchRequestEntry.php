<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociationBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $InstanceId
 * @property array<string, list<string>> $Parameters
 * @property string $AutomationTargetParameterName
 * @property string $DocumentVersion
 * @property list<Target> $Targets
 * @property string $ScheduleExpression
 * @property InstanceAssociationOutputLocation $OutputLocation
 * @property string $AssociationName
 * @property string $MaxErrors
 * @property string $MaxConcurrency
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED' $ComplianceSeverity
 * @property 'AUTO'|'MANUAL' $SyncCompliance
 * @property bool $ApplyOnlyAtCronInterval
 * @property list<string> $CalendarNames
 * @property list<TargetLocation> $TargetLocations
 * @property int $ScheduleOffset
 * @property int $Duration
 * @property list<array<string, list<string>>> $TargetMaps
 * @property AlarmConfiguration $AlarmConfiguration
 */
class CreateAssociationBatchRequestEntry extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     InstanceId?: string,
     *     Parameters?: array<string, list<string>>,
     *     AutomationTargetParameterName?: string,
     *     DocumentVersion?: string,
     *     Targets?: list<Target>,
     *     ScheduleExpression?: string,
     *     OutputLocation?: InstanceAssociationOutputLocation,
     *     AssociationName?: string,
     *     MaxErrors?: string,
     *     MaxConcurrency?: string,
     *     ComplianceSeverity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED',
     *     SyncCompliance?: 'AUTO'|'MANUAL',
     *     ApplyOnlyAtCronInterval?: bool,
     *     CalendarNames?: list<string>,
     *     TargetLocations?: list<TargetLocation>,
     *     ScheduleOffset?: int,
     *     Duration?: int,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     AlarmConfiguration?: AlarmConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
