<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeleteQueuedReservedInstancesError $Error
 * @property string $ReservedInstancesId
 */
class FailedQueuedPurchaseDeletion extends Shape
{
    /**
     * @param array{
     *     Error?: DeleteQueuedReservedInstancesError,
     *     ReservedInstancesId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
