<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property array<string, list<string>> $Parameters
 * @property string $DocumentVersion
 * @property string $ScheduleExpression
 * @property Shapes\InstanceAssociationOutputLocation $OutputLocation
 * @property string $Name
 * @property list<Shapes\Target> $Targets
 * @property string $AssociationName
 * @property string $AssociationVersion
 * @property string $AutomationTargetParameterName
 * @property string $MaxErrors
 * @property string $MaxConcurrency
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED' $ComplianceSeverity
 * @property 'AUTO'|'MANUAL' $SyncCompliance
 * @property bool $ApplyOnlyAtCronInterval
 * @property list<string> $CalendarNames
 * @property list<Shapes\TargetLocation> $TargetLocations
 * @property int $ScheduleOffset
 * @property int $Duration
 * @property list<array<string, list<string>>> $TargetMaps
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 */
class UpdateAssociationRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     Parameters?: array<string, list<string>>,
     *     DocumentVersion?: string,
     *     ScheduleExpression?: string,
     *     OutputLocation?: Shapes\InstanceAssociationOutputLocation,
     *     Name?: string,
     *     Targets?: list<Shapes\Target>,
     *     AssociationName?: string,
     *     AssociationVersion?: string,
     *     AutomationTargetParameterName?: string,
     *     MaxErrors?: string,
     *     MaxConcurrency?: string,
     *     ComplianceSeverity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED',
     *     SyncCompliance?: 'AUTO'|'MANUAL',
     *     ApplyOnlyAtCronInterval?: bool,
     *     CalendarNames?: list<string>,
     *     TargetLocations?: list<Shapes\TargetLocation>,
     *     ScheduleOffset?: int,
     *     Duration?: int,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
