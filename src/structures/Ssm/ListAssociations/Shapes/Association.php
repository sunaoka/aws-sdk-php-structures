<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $InstanceId
 * @property string $AssociationId
 * @property string $AssociationVersion
 * @property string $DocumentVersion
 * @property list<Target> $Targets
 * @property \Aws\Api\DateTimeResult $LastExecutionDate
 * @property AssociationOverview $Overview
 * @property string $ScheduleExpression
 * @property string $AssociationName
 * @property int<1, 6> $ScheduleOffset
 * @property int<1, 24> $Duration
 * @property list<array<string, list<string>>> $TargetMaps
 */
class Association extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     InstanceId?: string,
     *     AssociationId?: string,
     *     AssociationVersion?: string,
     *     DocumentVersion?: string,
     *     Targets?: list<Target>,
     *     LastExecutionDate?: \Aws\Api\DateTimeResult,
     *     Overview?: AssociationOverview,
     *     ScheduleExpression?: string,
     *     AssociationName?: string,
     *     ScheduleOffset?: int<1, 6>,
     *     Duration?: int<1, 24>,
     *     TargetMaps?: list<array<string, list<string>>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
