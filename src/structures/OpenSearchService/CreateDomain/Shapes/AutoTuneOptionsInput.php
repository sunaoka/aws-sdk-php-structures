<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $DesiredState
 * @property list<AutoTuneMaintenanceSchedule> $MaintenanceSchedules
 * @property bool $UseOffPeakWindow
 */
class AutoTuneOptionsInput extends Shape
{
    /**
     * @param array{
     *     DesiredState?: 'ENABLED'|'DISABLED',
     *     MaintenanceSchedules?: list<AutoTuneMaintenanceSchedule>,
     *     UseOffPeakWindow?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
