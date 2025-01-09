<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribePendingMaintenanceActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationInstanceArn
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribePendingMaintenanceActionsRequest extends Request
{
    /**
     * @param array{
     *     ReplicationInstanceArn?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
