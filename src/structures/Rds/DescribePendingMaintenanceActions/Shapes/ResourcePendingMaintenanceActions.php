<?php

namespace Sunaoka\Aws\Structures\Rds\DescribePendingMaintenanceActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceIdentifier
 * @property list<PendingMaintenanceAction>|null $PendingMaintenanceActionDetails
 */
class ResourcePendingMaintenanceActions extends Shape
{
    /**
     * @param array{
     *     ResourceIdentifier?: string|null,
     *     PendingMaintenanceActionDetails?: list<PendingMaintenanceAction>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
