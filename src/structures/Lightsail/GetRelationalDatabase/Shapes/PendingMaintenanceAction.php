<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $action
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $currentApplyDate
 */
class PendingMaintenanceAction extends Shape
{
    /**
     * @param array{
     *     action?: string|null,
     *     description?: string|null,
     *     currentApplyDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
