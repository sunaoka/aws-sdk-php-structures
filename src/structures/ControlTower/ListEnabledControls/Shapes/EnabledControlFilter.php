<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $controlIdentifiers
 * @property list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'> $driftStatuses
 * @property list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'> $statuses
 */
class EnabledControlFilter extends Shape
{
    /**
     * @param array{
     *     controlIdentifiers?: list<string>,
     *     driftStatuses?: list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>,
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
