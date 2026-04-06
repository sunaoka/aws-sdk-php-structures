<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $InstanceId
 * @property string|null $AssociationId
 * @property string|null $AssociationVersion
 * @property string|null $DocumentVersion
 * @property list<Target>|null $Targets
 * @property \Aws\Api\DateTimeResult|null $LastExecutionDate
 * @property AssociationOverview|null $Overview
 * @property string|null $ScheduleExpression
 * @property string|null $AssociationName
 * @property int<1, 6>|null $ScheduleOffset
 * @property int<1, 24>|null $Duration
 * @property list<array<string, list<string>>>|null $TargetMaps
 */
class Association extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     InstanceId?: string|null,
     *     AssociationId?: string|null,
     *     AssociationVersion?: string|null,
     *     DocumentVersion?: string|null,
     *     Targets?: list<Target>|null,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult|null,
     *     Overview?: AssociationOverview|null,
     *     ScheduleExpression?: string|null,
     *     AssociationName?: string|null,
     *     ScheduleOffset?: int<1, 6>|null,
     *     Duration?: int<1, 24>|null,
     *     TargetMaps?: list<array<string, list<string>>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
