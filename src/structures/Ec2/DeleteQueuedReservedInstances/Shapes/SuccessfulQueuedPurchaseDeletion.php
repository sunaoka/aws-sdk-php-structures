<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedInstancesId
 */
class SuccessfulQueuedPurchaseDeletion extends Shape
{
    /**
     * @param array{ReservedInstancesId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
