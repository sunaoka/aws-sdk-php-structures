<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CreatePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property list<Shapes\Workflow> $workflows
 * @property string $executionRole
 * @property int<1, 10080>|null $recoveryTimeObjectiveMinutes
 * @property array<string, Shapes\AssociatedAlarm>|null $associatedAlarms
 * @property list<Shapes\Trigger>|null $triggers
 * @property string $name
 * @property list<string> $regions
 * @property 'activeActive'|'activePassive' $recoveryApproach
 * @property string|null $primaryRegion
 * @property array<string, string>|null $tags
 */
class CreatePlanRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     workflows: list<Shapes\Workflow>,
     *     executionRole: string,
     *     recoveryTimeObjectiveMinutes?: int<1, 10080>|null,
     *     associatedAlarms?: array<string, Shapes\AssociatedAlarm>|null,
     *     triggers?: list<Shapes\Trigger>|null,
     *     name: string,
     *     regions: list<string>,
     *     recoveryApproach: 'activeActive'|'activePassive',
     *     primaryRegion?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
