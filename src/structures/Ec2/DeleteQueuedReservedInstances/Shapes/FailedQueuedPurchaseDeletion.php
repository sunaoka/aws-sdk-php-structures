<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeleteQueuedReservedInstancesError|null $Error
 * @property string|null $ReservedInstancesId
 */
class FailedQueuedPurchaseDeletion extends Shape
{
    /**
     * @param array{
     *     Error?: DeleteQueuedReservedInstancesError|null,
     *     ReservedInstancesId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
