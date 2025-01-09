<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTaskWithMaintenanceWindow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientContext
 * @property string $Qualifier
 * @property string $Payload
 */
class MaintenanceWindowLambdaParameters extends Shape
{
    /**
     * @param array{
     *     ClientContext?: string,
     *     Qualifier?: string,
     *     Payload?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
