<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\UpdatePlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $description
 * @property list<Shapes\Workflow> $workflows
 * @property string $executionRole
 * @property int<1, 10080>|null $recoveryTimeObjectiveMinutes
 * @property array<string, Shapes\AssociatedAlarm>|null $associatedAlarms
 * @property list<Shapes\Trigger>|null $triggers
 */
class UpdatePlanRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     description?: string|null,
     *     workflows: list<Shapes\Workflow>,
     *     executionRole: string,
     *     recoveryTimeObjectiveMinutes?: int<1, 10080>|null,
     *     associatedAlarms?: array<string, Shapes\AssociatedAlarm>|null,
     *     triggers?: list<Shapes\Trigger>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
