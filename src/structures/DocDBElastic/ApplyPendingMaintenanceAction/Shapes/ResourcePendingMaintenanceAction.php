<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ApplyPendingMaintenanceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PendingMaintenanceActionDetails>|null $pendingMaintenanceActionDetails
 * @property string|null $resourceArn
 */
class ResourcePendingMaintenanceAction extends Shape
{
    /**
     * @param array{
     *     pendingMaintenanceActionDetails?: list<PendingMaintenanceActionDetails>|null,
     *     resourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
