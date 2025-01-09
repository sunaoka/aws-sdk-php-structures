<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'reserved-instances-id-invalid'|'reserved-instances-not-in-queued-state'|'unexpected-error' $Code
 * @property string $Message
 */
class DeleteQueuedReservedInstancesError extends Shape
{
    /**
     * @param array{
     *     Code?: 'reserved-instances-id-invalid'|'reserved-instances-not-in-queued-state'|'unexpected-error',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
