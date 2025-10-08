<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string|null $description
 * @property list<Workflow> $workflows
 * @property string $executionRole
 * @property int<1, 10080>|null $recoveryTimeObjectiveMinutes
 * @property array<string, AssociatedAlarm>|null $associatedAlarms
 * @property list<Trigger>|null $triggers
 * @property string $name
 * @property list<string> $regions
 * @property 'activeActive'|'activePassive' $recoveryApproach
 * @property string|null $primaryRegion
 * @property string $owner
 * @property string|null $version
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Plan extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     description?: string|null,
     *     workflows: list<Workflow>,
     *     executionRole: string,
     *     recoveryTimeObjectiveMinutes?: int<1, 10080>|null,
     *     associatedAlarms?: array<string, AssociatedAlarm>|null,
     *     triggers?: list<Trigger>|null,
     *     name: string,
     *     regions: list<string>,
     *     recoveryApproach: 'activeActive'|'activePassive',
     *     primaryRegion?: string|null,
     *     owner: string,
     *     version?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
