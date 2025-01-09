<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociationVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $AssociationVersion
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property string $Name
 * @property string $DocumentVersion
 * @property array<string, list<string>> $Parameters
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
 */
class AssociationVersionInfo extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     AssociationVersion?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     Name?: string,
     *     DocumentVersion?: string,
     *     Parameters?: array<string, list<string>>,
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
     *     TargetMaps?: list<array<string, list<string>>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
