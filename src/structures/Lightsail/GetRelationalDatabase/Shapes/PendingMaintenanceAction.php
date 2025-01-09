<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $action
 * @property string $description
 * @property \Aws\Api\DateTimeResult $currentApplyDate
 */
class PendingMaintenanceAction extends Shape
{
    /**
     * @param array{
     *     action?: string,
     *     description?: string,
     *     currentApplyDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
