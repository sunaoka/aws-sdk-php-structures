<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ApplyPendingMaintenanceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceIdentifier
 * @property list<PendingMaintenanceAction> $PendingMaintenanceActionDetails
 */
class ResourcePendingMaintenanceActions extends Shape
{
    /**
     * @param array{
     *     ResourceIdentifier?: string,
     *     PendingMaintenanceActionDetails?: list<PendingMaintenanceAction>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
