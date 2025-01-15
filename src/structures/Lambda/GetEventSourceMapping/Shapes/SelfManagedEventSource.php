<?php

namespace Sunaoka\Aws\Structures\Lambda\GetEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'KAFKA_BOOTSTRAP_SERVERS', list<string>>|null $Endpoints
 */
class SelfManagedEventSource extends Shape
{
    /**
     * @param array{Endpoints?: array<'KAFKA_BOOTSTRAP_SERVERS', list<string>>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
