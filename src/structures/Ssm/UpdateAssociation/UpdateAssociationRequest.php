<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property array<string, list<string>>|null $Parameters
 * @property string|null $DocumentVersion
 * @property string|null $ScheduleExpression
 * @property Shapes\InstanceAssociationOutputLocation|null $OutputLocation
 * @property string|null $Name
 * @property list<Shapes\Target>|null $Targets
 * @property string|null $AssociationName
 * @property string|null $AssociationVersion
 * @property string|null $AutomationTargetParameterName
 * @property string|null $MaxErrors
 * @property string|null $MaxConcurrency
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED'|null $ComplianceSeverity
 * @property 'AUTO'|'MANUAL'|null $SyncCompliance
 * @property bool|null $ApplyOnlyAtCronInterval
 * @property list<string>|null $CalendarNames
 * @property list<Shapes\TargetLocation>|null $TargetLocations
 * @property int<1, 6>|null $ScheduleOffset
 * @property int<1, 24>|null $Duration
 * @property list<array<string, list<string>>>|null $TargetMaps
 * @property Shapes\AlarmConfiguration|null $AlarmConfiguration
 */
class UpdateAssociationRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     Parameters?: array<string, list<string>>|null,
     *     DocumentVersion?: string|null,
     *     ScheduleExpression?: string|null,
     *     OutputLocation?: Shapes\InstanceAssociationOutputLocation|null,
     *     Name?: string|null,
     *     Targets?: list<Shapes\Target>|null,
     *     AssociationName?: string|null,
     *     AssociationVersion?: string|null,
     *     AutomationTargetParameterName?: string|null,
     *     MaxErrors?: string|null,
     *     MaxConcurrency?: string|null,
     *     ComplianceSeverity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED'|null,
     *     SyncCompliance?: 'AUTO'|'MANUAL'|null,
     *     ApplyOnlyAtCronInterval?: bool|null,
     *     CalendarNames?: list<string>|null,
     *     TargetLocations?: list<Shapes\TargetLocation>|null,
     *     ScheduleOffset?: int<1, 6>|null,
     *     Duration?: int<1, 24>|null,
     *     TargetMaps?: list<array<string, list<string>>>|null,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
