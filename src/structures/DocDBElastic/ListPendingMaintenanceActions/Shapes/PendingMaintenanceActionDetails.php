<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\ListPendingMaintenanceActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property string $autoAppliedAfterDate
 * @property string $currentApplyDate
 * @property string $description
 * @property string $forcedApplyDate
 * @property string $optInStatus
 */
class PendingMaintenanceActionDetails extends Shape
{
    /**
     * @param array{
     *     action: string,
     *     autoAppliedAfterDate?: string,
     *     currentApplyDate?: string,
     *     description?: string,
     *     forcedApplyDate?: string,
     *     optInStatus?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
