<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ListPendingMaintenanceActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PendingMaintenanceActionDetails> $pendingMaintenanceActionDetails
 * @property string $resourceArn
 */
class ResourcePendingMaintenanceAction extends Shape
{
    /**
     * @param array{
     *     pendingMaintenanceActionDetails?: list<PendingMaintenanceActionDetails>,
     *     resourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
