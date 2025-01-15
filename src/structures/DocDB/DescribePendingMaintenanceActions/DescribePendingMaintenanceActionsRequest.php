<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribePendingMaintenanceActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int|null $MaxRecords
 */
class DescribePendingMaintenanceActionsRequest extends Request
{
    /**
     * @param array{
     *     ResourceIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
