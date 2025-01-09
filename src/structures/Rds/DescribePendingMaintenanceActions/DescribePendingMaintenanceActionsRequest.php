<?php

namespace Sunaoka\Aws\Structures\Rds\DescribePendingMaintenanceActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribePendingMaintenanceActionsRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier?: string,
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
