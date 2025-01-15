<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'reserved-instances-id-invalid'|'reserved-instances-not-in-queued-state'|'unexpected-error'|null $Code
 * @property string|null $Message
 */
class DeleteQueuedReservedInstancesError extends Shape
{
    /**
     * @param array{
     *     Code?: 'reserved-instances-id-invalid'|'reserved-instances-not-in-queued-state'|'unexpected-error'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
