<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 3600>|null $timeoutSeconds
 */
class GatewayConnectorDeregistrationDelay extends Shape
{
    /**
     * @param array{timeoutSeconds?: int<0, 3600>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
