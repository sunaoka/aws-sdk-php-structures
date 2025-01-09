<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $DesiredState
 * @property list<AutoTuneMaintenanceSchedule> $MaintenanceSchedules
 */
class AutoTuneOptionsInput extends Shape
{
    /**
     * @param array{
     *     DesiredState?: 'ENABLED'|'DISABLED',
     *     MaintenanceSchedules?: list<AutoTuneMaintenanceSchedule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
