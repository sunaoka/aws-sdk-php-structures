<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property string $targetRegion
 * @property 'activate'|'deactivate' $action
 * @property list<TriggerCondition> $conditions
 * @property int $minDelayMinutesBetweenExecutions
 */
class Trigger extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     targetRegion: string,
     *     action: 'activate'|'deactivate',
     *     conditions: list<TriggerCondition>,
     *     minDelayMinutesBetweenExecutions: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
