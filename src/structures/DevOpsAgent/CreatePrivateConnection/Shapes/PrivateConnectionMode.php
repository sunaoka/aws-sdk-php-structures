<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreatePrivateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceManagedInput|null $serviceManaged
 * @property SelfManagedInput|null $selfManaged
 */
class PrivateConnectionMode extends Shape
{
    /**
     * @param array{
     *     serviceManaged?: ServiceManagedInput|null,
     *     selfManaged?: SelfManagedInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
