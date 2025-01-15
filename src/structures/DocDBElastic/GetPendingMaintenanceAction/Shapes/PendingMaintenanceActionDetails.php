<?php

namespace Sunaoka\Aws\Structures\DocDBElastic\GetPendingMaintenanceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property string|null $autoAppliedAfterDate
 * @property string|null $currentApplyDate
 * @property string|null $description
 * @property string|null $forcedApplyDate
 * @property string|null $optInStatus
 */
class PendingMaintenanceActionDetails extends Shape
{
    /**
     * @param array{
     *     action: string,
     *     autoAppliedAfterDate?: string|null,
     *     currentApplyDate?: string|null,
     *     description?: string|null,
     *     forcedApplyDate?: string|null,
     *     optInStatus?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
