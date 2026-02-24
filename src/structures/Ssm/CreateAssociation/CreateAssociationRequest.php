<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $DocumentVersion
 * @property string|null $InstanceId
 * @property array<string, list<string>>|null $Parameters
 * @property list<Shapes\Target>|null $Targets
 * @property string|null $ScheduleExpression
 * @property Shapes\InstanceAssociationOutputLocation|null $OutputLocation
 * @property string|null $AssociationName
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
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\AlarmConfiguration|null $AlarmConfiguration
 * @property string|null $AssociationDispatchAssumeRole
 */
class CreateAssociationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string|null,
     *     InstanceId?: string|null,
     *     Parameters?: array<string, list<string>>|null,
     *     Targets?: list<Shapes\Target>|null,
     *     ScheduleExpression?: string|null,
     *     OutputLocation?: Shapes\InstanceAssociationOutputLocation|null,
     *     AssociationName?: string|null,
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
     *     Tags?: list<Shapes\Tag>|null,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration|null,
     *     AssociationDispatchAssumeRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
