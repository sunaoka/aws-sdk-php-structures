<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListEnabledControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $controlIdentifiers
 * @property list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>|null $driftStatuses
 * @property list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>|null $statuses
 */
class EnabledControlFilter extends Shape
{
    /**
     * @param array{
     *     controlIdentifiers?: list<string>|null,
     *     driftStatuses?: list<'DRIFTED'|'IN_SYNC'|'NOT_CHECKING'|'UNKNOWN'>|null,
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'UNDER_CHANGE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
