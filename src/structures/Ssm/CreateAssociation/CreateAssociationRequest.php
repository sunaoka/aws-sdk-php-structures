<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $DocumentVersion
 * @property string $InstanceId
 * @property array<string, list<string>> $Parameters
 * @property list<Shapes\Target> $Targets
 * @property string $ScheduleExpression
 * @property Shapes\InstanceAssociationOutputLocation $OutputLocation
 * @property string $AssociationName
 * @property string $AutomationTargetParameterName
 * @property string $MaxErrors
 * @property string $MaxConcurrency
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED' $ComplianceSeverity
 * @property 'AUTO'|'MANUAL' $SyncCompliance
 * @property bool $ApplyOnlyAtCronInterval
 * @property list<string> $CalendarNames
 * @property list<Shapes\TargetLocation> $TargetLocations
 * @property int<1, 6> $ScheduleOffset
 * @property int<1, 24> $Duration
 * @property list<array<string, list<string>>> $TargetMaps
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 */
class CreateAssociationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     DocumentVersion?: string,
     *     InstanceId?: string,
     *     Parameters?: array<string, list<string>>,
     *     Targets?: list<Shapes\Target>,
     *     ScheduleExpression?: string,
     *     OutputLocation?: Shapes\InstanceAssociationOutputLocation,
     *     AssociationName?: string,
     *     AutomationTargetParameterName?: string,
     *     MaxErrors?: string,
     *     MaxConcurrency?: string,
     *     ComplianceSeverity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'UNSPECIFIED',
     *     SyncCompliance?: 'AUTO'|'MANUAL',
     *     ApplyOnlyAtCronInterval?: bool,
     *     CalendarNames?: list<string>,
     *     TargetLocations?: list<Shapes\TargetLocation>,
     *     ScheduleOffset?: int<1, 6>,
     *     Duration?: int<1, 24>,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     Tags?: list<Shapes\Tag>,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
