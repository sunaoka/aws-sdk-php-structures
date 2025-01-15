<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $DesiredState
 * @property 'NO_ROLLBACK'|'DEFAULT_ROLLBACK'|null $RollbackOnDisable
 * @property list<AutoTuneMaintenanceSchedule>|null $MaintenanceSchedules
 * @property bool|null $UseOffPeakWindow
 */
class AutoTuneOptions extends Shape
{
    /**
     * @param array{
     *     DesiredState?: 'ENABLED'|'DISABLED'|null,
     *     RollbackOnDisable?: 'NO_ROLLBACK'|'DEFAULT_ROLLBACK'|null,
     *     MaintenanceSchedules?: list<AutoTuneMaintenanceSchedule>|null,
     *     UseOffPeakWindow?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
