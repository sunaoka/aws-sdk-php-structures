<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'KAFKA_BOOTSTRAP_SERVERS', list<string>> $Endpoints
 */
class SelfManagedEventSource extends Shape
{
    /**
     * @param array{Endpoints?: array<'KAFKA_BOOTSTRAP_SERVERS', list<string>>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
