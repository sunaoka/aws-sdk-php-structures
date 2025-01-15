<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $DesiredState
 * @property list<AutoTuneMaintenanceSchedule>|null $MaintenanceSchedules
 * @property bool|null $UseOffPeakWindow
 */
class AutoTuneOptionsInput extends Shape
{
    /**
     * @param array{
     *     DesiredState?: 'ENABLED'|'DISABLED'|null,
     *     MaintenanceSchedules?: list<AutoTuneMaintenanceSchedule>|null,
     *     UseOffPeakWindow?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
