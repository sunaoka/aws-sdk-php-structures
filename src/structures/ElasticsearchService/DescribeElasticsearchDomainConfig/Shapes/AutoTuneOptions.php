<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $DesiredState
 * @property 'NO_ROLLBACK'|'DEFAULT_ROLLBACK' $RollbackOnDisable
 * @property list<AutoTuneMaintenanceSchedule> $MaintenanceSchedules
 */
class AutoTuneOptions extends Shape
{
    /**
     * @param array{
     *     DesiredState?: 'ENABLED'|'DISABLED',
     *     RollbackOnDisable?: 'NO_ROLLBACK'|'DEFAULT_ROLLBACK',
     *     MaintenanceSchedules?: list<AutoTuneMaintenanceSchedule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
