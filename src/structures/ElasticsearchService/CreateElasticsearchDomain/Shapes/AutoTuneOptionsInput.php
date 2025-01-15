<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $DesiredState
 * @property list<AutoTuneMaintenanceSchedule>|null $MaintenanceSchedules
 */
class AutoTuneOptionsInput extends Shape
{
    /**
     * @param array{
     *     DesiredState?: 'ENABLED'|'DISABLED'|null,
     *     MaintenanceSchedules?: list<AutoTuneMaintenanceSchedule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
